package com;

import javafx.application.Platform;
import javafx.embed.swing.JFXPanel;

import java.awt.event.FocusListener;
import java.awt.event.WindowAdapter;
import java.awt.event.WindowListener;
import java.util.Optional;

import javax.swing.event.ChangeEvent;
import javax.swing.event.ChangeListener;

import com.sun.xml.internal.ws.api.Component;

import javafx.application.Application;
import javafx.event.ActionEvent;
import javafx.event.EventHandler;
import javafx.scene.Scene;
import javafx.scene.control.Alert;
import javafx.scene.control.Alert.AlertType;
import javafx.scene.control.Button;
import javafx.scene.control.ButtonType;
import javafx.scene.image.Image;
import javafx.scene.input.KeyCombination;
import javafx.scene.input.KeyEvent;
import javafx.scene.layout.BorderPane;
import javafx.scene.layout.StackPane;
import javafx.scene.web.WebEngine;
import javafx.scene.web.WebView;
import javafx.stage.Stage;
import javafx.stage.StageStyle;
import javafx.stage.WindowEvent;

import javax.swing.ImageIcon;
import javax.swing.JFrame;
import javax.swing.JOptionPane;
import javax.swing.SwingUtilities;

public class Browser {
	static JFrame frame;
    private static void initAndShowGUI() {
        // This method is invoked on the EDT thread
        frame = new JFrame("Online Exam");
        final JFXPanel fxPanel = new JFXPanel();
        frame.add(fxPanel);
        
        frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        frame.setExtendedState(JFrame.MAXIMIZED_BOTH);
        frame.setResizable(false);
        frame.setUndecorated(true);
        frame.setIconImage(new ImageIcon("gpjlogo.png").getImage());
        frame.setVisible(true);
        frame.toFront();
        frame.requestFocus();
        frame.setAlwaysOnTop(true);
        

        Platform.runLater(new Runnable() {
            @Override
            public void run() {
                initFX(fxPanel);
            }
       });
    }

    private static void initFX(JFXPanel fxPanel) {
        // This method is invoked on the JavaFX thread
        Scene scene = createScene();
        fxPanel.setScene(scene);
    }

    private static Scene createScene() {
         BorderPane root = new BorderPane();
		        WebView webView = new WebView();
		        webView.setZoom(1.5);
		        webView.setContextMenuEnabled(false);
		        WebEngine webEngine = webView.getEngine();
		        webEngine.setUserAgent("SoftwareHub1.0");
		        webEngine.load("http://www.localhost/online_exam/");
		        Button b = new Button("EXIT");
		        b.setStyle("-fx-background-color:#ff0000;-fx-text-fill:#ffffff;-fx-font-weight:bold;");
		        b.setMinSize(100,40);
		        b.setOnAction(new EventHandler<ActionEvent>() {

		            @Override
		            public void handle(ActionEvent event) {
		            	System.exit(0);
		            }

        });
        root.setCenter(webView);
        root.setTop(b);
        Scene scene = new Scene(root);
        return (scene);
    }

    public static void main(String[] args) {
        SwingUtilities.invokeLater(new Runnable() {
            @Override
            public void run() {
                initAndShowGUI();
            }
        });
    }
    
}

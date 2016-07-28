import java.util.LinkedList;
import java.util.List;
import java.util.Scanner;
import java.util.zip.GZIPInputStream;
import java.io.BufferedReader;
import java.io.File;
import java.io.FileInputStream;
import java.io.FileReader;
import java.io.IOException;
import java.io.InputStream;
import java.io.InputStreamReader;

import mpi.MPI;

/**
 * Test class to simulate OpenMPI segfault. 
 * 
 * This class opens a text file and reads its lines, over and over. It doesn't do anything with it, just
 * reads lines into memory.
 * 
 * You need to give it a directory on the command-line, and it looks for the text file in there. Each line in 
 * the text file is expected to have some text, a tab character, and more text.
 * 
 * MPITestBroke <dir>
 * 
 */
public class MPITestBroke {
  String tweetDirectory;
  Scanner rawScanner = null;
  
  int id;
  int numProcesses;

  List<String> allFiles;


  /*****
   * MPITestBroke expects one arg, the path to a text directory.
   * @param args Command-line args
   */
  public MPITestBroke(String[] args) {
    id = 0;
    tweetDirectory = args[0];

    // Tries to get MPI going
    setupMPI(args);

    // Gets all the files in the tweet directory
    allFiles = new LinkedList<String>();
    for( String name : getFiles(tweetDirectory) )
      allFiles.add(name);
  }

  private void runPMI() {
    int i = 0;
    for(String file : allFiles ) {
      // If this day should be featurized according to the process number
      if(id == (i % numProcesses)){
        featurize(file);
        System.out.println("Rank " + id + " of " + numProcesses + " finished day " + file);
      }
      else System.out.println("Rank " + id + " of " + numProcesses + " skipped day " + file);
      i++;
    }
    System.out.println("Rank " + id + " of " + numProcesses + " leaving runPMI()");
  }

  /******
   * This method just reads lines from the file forever. It splits them on a tab character.
   * @param file of text, one per line with some tab characters
   */
  private void featurize(String file) {
    String tweet = getNextRawTweet(file);
    tweet = tweet.split("\t")[0];
    while(tweet != null){
      tweet = getNextRawTweet(file);
      if(tweet != null){
        tweet=tweet.split("\t")[0];
      }
    }
  }

  private void setupMPI(String[] args) {
    try {
      MPI.Init(args); 
      System.gc();
      MPI.COMM_WORLD.setErrhandler(MPI.ERRORS_RETURN);
      id = MPI.COMM_WORLD.getRank();
      numProcesses = MPI.COMM_WORLD.getSize();
    }
    catch(Exception e){
      System.out.println("MPI failed to initiate. Assuming normal processing.");
      e.printStackTrace();
    }
    catch(UnsatisfiedLinkError ule){
      System.out.println("Not using MPI");
    }
  }

  /**
   * Read a directory and return all files.
   */
  public static List<String> getFiles(String dirPath) {
    return getFiles(new File(dirPath));
  }
  public static List<String> getFiles(File dir) {
    if( dir.isDirectory() ) {
      List<String> files = new LinkedList<String>();
      for( String file : dir.list() ) {
        if( !file.startsWith(".") )
          files.add(file);
      }
      return files;
    }

    return null;
  }

  /**
   * Returns the string of a single raw tweet line from the file.
   * 
   * @return
   */
  public String getNextRawTweet(String file) {
    if( rawScanner != null && rawScanner.hasNext() ) {
      try {
        String line = rawScanner.next();
        if( line != null )
          return line;
        else {
          rawScanner.close();
          System.out.println("Closed file.");
        }
      } catch (Exception ex) {
        ex.printStackTrace();
      }
    }
    // Open the next file
    else {
      openFile(tweetDirectory + File.separator + file);
      return getNextRawTweet(file);      
    }

    return null;
  }

  private boolean openFile(String path) {
    System.out.println("\nopening file " + path);
    try {
      BufferedReader rawReader;
      if( rawScanner != null )
        rawScanner.close();
      // Zipped
      if( path.endsWith(".gz") ) {
        InputStream in = new GZIPInputStream(new FileInputStream(new File(path)));
        rawReader = new BufferedReader(new InputStreamReader(in));
      }
      // Non-zipped
      else {
        rawReader = new BufferedReader(new FileReader(path));
      }
      rawScanner = new Scanner(rawReader).useDelimiter("\n");
    } catch( IOException ex ) {
      System.err.println("Error opening file: " + path);
      ex.printStackTrace();
      return false;
    }
    return true;
  }

  /**
   * The Main takes one argument: path to a directory that contains a text file
   */
  public static void main(String[] args) {
    if (args.length == 2){
      // Create the Featurize day object
      MPITestBroke test = new MPITestBroke(args);

      //Get the PMIs
      test.runPMI();

      try {
        System.out.println("Finalizing...");
        MPI.Finalize();
      } catch( Exception ex ) {
        ex.printStackTrace();
      }
    }
    // Hits here if the arguments are wrong
    else 
      System.out.println("Argument format needed: path/To/TweetDir");
  }

}

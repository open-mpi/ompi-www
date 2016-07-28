<?
$subject_val = "Re: [OMPI users] MPI Java Bindings on Mac OSX";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  3 14:05:19 2013" -->
<!-- isoreceived="20130103190519" -->
<!-- sent="Thu, 3 Jan 2013 11:05:11 -0800" -->
<!-- isosent="20130103190511" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI Java Bindings on Mac OSX" -->
<!-- id="E60EB81F-1EA9-41D7-BC99-7988670E0B8C_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CD0B096F.B7FF%daniel.beatty_at_navy.mil" -->
<!-- expires="-1" -->
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<p class="headers">
<strong>Subject:</strong> Re: [OMPI users] MPI Java Bindings on Mac OSX<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-03 14:05:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21072.php">Chuck Yahoo: "Re: [OMPI users] MPI Java Bindings on Mac OSX"</a>
<li><strong>Previous message:</strong> <a href="21070.php">Beatty, Daniel D CIV NAVAIR, 474300D: "Re: [OMPI users] MPI Java Bindings on Mac OSX"</a>
<li><strong>In reply to:</strong> <a href="21070.php">Beatty, Daniel D CIV NAVAIR, 474300D: "Re: [OMPI users] MPI Java Bindings on Mac OSX"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21072.php">Chuck Yahoo: "Re: [OMPI users] MPI Java Bindings on Mac OSX"</a>
<li><strong>Reply:</strong> <a href="21072.php">Chuck Yahoo: "Re: [OMPI users] MPI Java Bindings on Mac OSX"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FWIW: I test it regularly on Mountain Lion, without problem. We know that some of the bindings aren't quite right, particularly on some of the collectives, but send/recv is fine
<br>
<p><p>On Jan 3, 2013, at 10:09 AM, &quot;Beatty, Daniel D CIV NAVAIR, 474300D&quot; &lt;daniel.beatty_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Greetings Chuck, 
</span><br>
<span class="quotelev1">&gt; I tend to agree with Doug.  It hope to be able to test soon OpenMPI under Lion/Mountain Lion.  If someone has already done so, especially with Java, that could be quite handy.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; V/R,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Daniel Beatty, Ph.D.
</span><br>
<span class="quotelev1">&gt; Computer Scientist, Detonation Sciences Branch
</span><br>
<span class="quotelev1">&gt; Code 474300D
</span><br>
<span class="quotelev1">&gt; 1 Administration Circle M/S 1109
</span><br>
<span class="quotelev1">&gt; China Lake, CA 93555
</span><br>
<span class="quotelev1">&gt; daniel.beatty_at_[hidden]
</span><br>
<span class="quotelev1">&gt; (LandLine) (760)939-7097 
</span><br>
<span class="quotelev1">&gt; (iPhone) (806)438-6620
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 1/3/13 9:49 AM, &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Doug
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What modules software do you use on the Mac? Would be nice to know :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jan 3, 2013, at 8:34 AM, Doug Reeder &lt;dlr1_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Chuck,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In step 4 you might want to consider the following
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --prefix=/usr/local/openmpi-1.7rc5
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and use the modules software to select which version of openmpi to use. I have to have multiple versions of openmpi available on my macs and this approach has worked well for me.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Doug Reeder
</span><br>
<span class="quotelev1">&gt; On Jan 3, 2013, at 9:22 AM, Chuck Mosher wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've been trying to get a working version of the MPI java bindings on Mac OSX (10.6.8 with Java 1.6.0_37).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I ran into a number of issues along the way that I thought I would record here for others who might be foolish enough to try the same ;-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The issues I had to spend time with were:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. Installing a C compiler that can run from the command line
</span><br>
<span class="quotelev1">&gt; 2. Finding and installing an appropriate Java JDK for my OS version
</span><br>
<span class="quotelev1">&gt; 3. Building and installing OpenMPI for the first time on a Mac
</span><br>
<span class="quotelev1">&gt; 4. Conflicts with the existing OpenMPI version 1.2.8 that was installed already on my Mac
</span><br>
<span class="quotelev1">&gt; 5. Figuring out syntax for using the mpirun command line to run java
</span><br>
<span class="quotelev1">&gt; 6. Odd behavior when trying to use &quot;localhost&quot; or the output from `hostname` on the command line or in a hostfile
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Resolution for each of these in order:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. Installing a C compiler for the command line
</span><br>
<span class="quotelev1">&gt; Found a good resource here:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.macobserver.com/tmo/article/install_the_command_line_c_compilers_in_os_x_lion">http://www.macobserver.com/tmo/article/install_the_command_line_c_compilers_in_os_x_lion</a> &lt;<a href="http://www.macobserver.com/tmo/article/install_the_command_line_c_compilers_in_os_x_lion">http://www.macobserver.com/tmo/article/install_the_command_line_c_compilers_in_os_x_lion</a>&gt; 
</span><br>
<span class="quotelev1">&gt; The solution is to install XCode, then enable command line compilers from the XCode console.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. Finding and installing an appropriate Java JDK for my OS version
</span><br>
<span class="quotelev1">&gt; Used this resource to eventually figure out what to do:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.wikihow.com/Install-the-JDK-(Java-Development-Kit">http://www.wikihow.com/Install-the-JDK-(Java-Development-Kit</a>)-on-Mac-OS-X &lt;<a href="http://www.wikihow.com/Install-the-JDK-(Java-Development-Kit">http://www.wikihow.com/Install-the-JDK-(Java-Development-Kit</a>)-on-Mac-OS-X&gt; 
</span><br>
<span class="quotelev1">&gt; It didn't exactly match my setup, but had enough clues.
</span><br>
<span class="quotelev1">&gt; The solution is to first find your java version (java -version, 1.6.0_37 in my case) and then match that version number to the Apple Java update version (11 in my case). 
</span><br>
<span class="quotelev1">&gt; The key document is:
</span><br>
<span class="quotelev1">&gt; <a href="http://developer.apple.com/library/mac/#technotes/tn2002/tn2110.html">http://developer.apple.com/library/mac/#technotes/tn2002/tn2110.html</a>
</span><br>
<span class="quotelev1">&gt; Which is a table relating java version numbers to the appropriate &quot;Java for Mac OS X xx.x Update xx&quot;.
</span><br>
<span class="quotelev1">&gt; Once you know the update number, you can download the JDK installer from
</span><br>
<span class="quotelev1">&gt; <a href="https://developer.apple.com/downloads/index.action">https://developer.apple.com/downloads/index.action</a>
</span><br>
<span class="quotelev1">&gt; where you of course have to have an Apple developer ID to access.
</span><br>
<span class="quotelev1">&gt; Enter &quot;java&quot; in the search bar on the left and find the matching java update, and you're good to go.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 3. Building and installing OpenMPI for the first time on a Mac
</span><br>
<span class="quotelev1">&gt; After the usual false starts with a new installation on a new OS, I managed to get a working build of openmpi-1.7rc5 with Java bindings.
</span><br>
<span class="quotelev1">&gt; I could only find the java bindings in the 1.7 pre-release.
</span><br>
<span class="quotelev1">&gt; I used the defaults as much as possible. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; After downloading from:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/software/ompi/v1.7/">http://www.open-mpi.org/software/ompi/v1.7/</a>
</span><br>
<span class="quotelev1">&gt; and unarchiving to Downloads, open a Terminal window.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; cd Downloads/openmpi-1.7rc5
</span><br>
<span class="quotelev1">&gt; ./configure --enable-java --prefix=/usr/local
</span><br>
<span class="quotelev1">&gt; make all
</span><br>
<span class="quotelev1">&gt; sudo make install
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Verify that you can run the commands and examples:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; chuck-&gt; /usr/local/bin/mpirun -version
</span><br>
<span class="quotelev1">&gt; mpirun (Open MPI) 1.7rc5
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; chuck-&gt; cd examples
</span><br>
<span class="quotelev1">&gt; chuck-&gt; make
</span><br>
<span class="quotelev1">&gt; chuck-&gt; /usr/local/bin/mpirun -np 2 hello_c
</span><br>
<span class="quotelev1">&gt; Hello, world, I am 0 of 2, (Open MPI v1.7rc5, package: Open MPI chuck_at_chucks-iMac.local Distribution, ident: 1.7rc5, Oct 30, 2012, 111)
</span><br>
<span class="quotelev1">&gt; Hello, world, I am 1 of 2, (Open MPI v1.7rc5, package: Open MPI chuck_at_chucks-iMac.local Distribution, ident: 1.7rc5, Oct 30, 2012, 111)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 4. Conflicts with the existing OpenMPI version 1.2.8 that was installed already on my Mac
</span><br>
<span class="quotelev1">&gt; OpenMPI Version 1.2.8 was already installed for my OS in /usr/bin
</span><br>
<span class="quotelev1">&gt; So, if you accidentally type:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; chuck-&gt; mpirun -np 2 hello_c
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; A requested component was not found, or was unable to be opened
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; you picked up the wrong &quot;mpirun&quot; and you will get a bunch of error output complaining about sockets or mis-matched shared library versions.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I dealt with this moving the existing OpenMPI related commands to a subdirectory, and then created symbolic links from /usr/local/bin to /usr/bin for the commands I needed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 5. Figuring out syntax for using the mpirun command line to run java
</span><br>
<span class="quotelev1">&gt; First be sure you can run Java
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; chuck-&gt; /usr/bin/java -version
</span><br>
<span class="quotelev1">&gt; java version &quot;1.6.0_37&quot;
</span><br>
<span class="quotelev1">&gt; Java(TM) SE Runtime Environment (build 1.6.0_37-b06-434-10M3909)
</span><br>
<span class="quotelev1">&gt; Java HotSpot(TM) 64-Bit Server VM (build 20.12-b01-434, mixed mode)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Then be sure you can run your java class from the command line as well. To figure this out I created a couple of simple java files in a temp directory:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; chuck-&gt; cd ~/tmp
</span><br>
<span class="quotelev1">&gt; chuck-&gt; mkdir classes
</span><br>
<span class="quotelev1">&gt; chuck -&gt; cat HelloWorld.java
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; public class HelloWorld {
</span><br>
<span class="quotelev1">&gt;   public static void main(String[] args) {
</span><br>
<span class="quotelev1">&gt;     System.out.println(&quot;Hello World, from Java !&quot;);
</span><br>
<span class="quotelev1">&gt;   }
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; chuck-&gt; javac -d classes HelloWorld.java
</span><br>
<span class="quotelev1">&gt; chuck-&gt; java -cp ./classes HelloWorld
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello World, from Java !
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; No sense going further until you can get the code above to run.
</span><br>
<span class="quotelev1">&gt; If you have that working, then you can try the MPI version of HelloWorld:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; chuck-&gt; cat HelloWorldMPI.java
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; import mpi.*;
</span><br>
<span class="quotelev1">&gt; class HelloWorldMPI {
</span><br>
<span class="quotelev1">&gt;   public static void main(String[] args) throws MPIException {
</span><br>
<span class="quotelev1">&gt;     MPI.Init(args);
</span><br>
<span class="quotelev1">&gt;     System.out.println(&quot;Hello world from rank &quot; + 
</span><br>
<span class="quotelev1">&gt;       MPI.COMM_WORLD.Rank() + &quot; of &quot; +
</span><br>
<span class="quotelev1">&gt;       MPI.COMM_WORLD.Size() );
</span><br>
<span class="quotelev1">&gt;     MPI.Finalize();
</span><br>
<span class="quotelev1">&gt;   }
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; chuck-&gt; /usr/local/bin/mpijavac -d classes HelloWorldMPI.java
</span><br>
<span class="quotelev1">&gt; /usr/local/bin/mpirun -np 2 /usr/bin/java -cp ./classes HelloWorldMPI
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello world from rank 0 of 2
</span><br>
<span class="quotelev1">&gt; Hello world from rank 1 of 2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And you're ready to go !
</span><br>
<span class="quotelev1">&gt; Except for one last thing ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 6. Odd behavior when trying to use &quot;localhost&quot; or the output from `hostname` on the command line or in a hostfile
</span><br>
<span class="quotelev1">&gt; You will note in the examples above no host names, hostifle, or appfile was used.
</span><br>
<span class="quotelev1">&gt; I found that trying to use &quot;-host localhost&quot; or &quot;-hostfile hostfile&quot; which contained &quot;localhost&quot; would not work:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun -host localhost -np 2 ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; in the examples above would not work, returning:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; chuck$ /usr/local/bin/mpirun -host localhost -np 2 /usr/bin/java -cp ./classes HelloWorldMPI
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; All nodes which are allocated for this job are already filled.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I posted this in a previous e-mail to this list, and it looks like a bug.
</span><br>
<span class="quotelev1">&gt; You can get around it by using the output from `hostname -s` which provides a trimmed name:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; chuck-&gt; /usr/local/bin/mpirun -host `hostname -s` -np 2 /usr/bin/java -cp ./classes HelloWorldMPI
</span><br>
<span class="quotelev1">&gt; Hello world from rank 0 of 2
</span><br>
<span class="quotelev1">&gt; Hello world from rank 1 of 2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You will also need to use this name in any hostfiles or appfiles as well until the bug is fixed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks to all for this great product !
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Chuck Mosher for JavaSeis.org &lt;<a href="http://javaseis.org/">http://javaseis.org/</a>&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21071/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21072.php">Chuck Yahoo: "Re: [OMPI users] MPI Java Bindings on Mac OSX"</a>
<li><strong>Previous message:</strong> <a href="21070.php">Beatty, Daniel D CIV NAVAIR, 474300D: "Re: [OMPI users] MPI Java Bindings on Mac OSX"</a>
<li><strong>In reply to:</strong> <a href="21070.php">Beatty, Daniel D CIV NAVAIR, 474300D: "Re: [OMPI users] MPI Java Bindings on Mac OSX"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21072.php">Chuck Yahoo: "Re: [OMPI users] MPI Java Bindings on Mac OSX"</a>
<li><strong>Reply:</strong> <a href="21072.php">Chuck Yahoo: "Re: [OMPI users] MPI Java Bindings on Mac OSX"</a>
<!-- reply="end" -->
</ul>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<!-- trailer="footer" -->
<? include("../../include/msg-footer.inc") ?>

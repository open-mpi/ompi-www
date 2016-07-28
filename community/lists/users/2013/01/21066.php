<?
$subject_val = "[OMPI users] MPI Java Bindings on Mac OSX";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  3 11:22:34 2013" -->
<!-- isoreceived="20130103162234" -->
<!-- sent="Thu, 3 Jan 2013 08:22:28 -0800 (PST)" -->
<!-- isosent="20130103162228" -->
<!-- name="Chuck Mosher" -->
<!-- email="chuckmosher_at_[hidden]" -->
<!-- subject="[OMPI users] MPI Java Bindings on Mac OSX" -->
<!-- id="1357230148.34534.YahooMailNeo_at_web141105.mail.bf1.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="BOZO" -->
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
<strong>Subject:</strong> [OMPI users] MPI Java Bindings on Mac OSX<br>
<strong>From:</strong> Chuck Mosher (<em>chuckmosher_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-03 11:22:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21067.php">Doug Reeder: "Re: [OMPI users] MPI Java Bindings on Mac OSX"</a>
<li><strong>Previous message:</strong> <a href="21065.php">Ake Sandgren: "Re: [OMPI users] grpcomm component hier gone..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21067.php">Doug Reeder: "Re: [OMPI users] MPI Java Bindings on Mac OSX"</a>
<li><strong>Reply:</strong> <a href="21067.php">Doug Reeder: "Re: [OMPI users] MPI Java Bindings on Mac OSX"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,

I've been trying to get a working version of the MPI java bindings on Mac OSX (10.6.8 with Java 1.6.0_37).

I ran into a number of issues along the way that I thought I would record here for others who might be foolish enough to try the same ;-)

The issues I had to spend time with were:

1. Installing a C compiler that can run from the command line2. Finding and installing an appropriate Java JDK for my OS version
3. Building and installing OpenMPI for the first time on a Mac
4. Conflicts with the existing OpenMPI version 1.2.8 that was installed already on my Mac
5. Figuring out syntax for using the mpirun command line to run java
6. Odd behavior when trying to use &quot;localhost&quot; or the output from `hostname` on the command line or in a hostfile

Resolution for each of these in order:

1. Installing a C compiler for the command line
Found a good resource here:
<a href="http://www.macobserver.com/tmo/article/install_the_command_line_c_compilers_in_os_x_lion">http://www.macobserver.com/tmo/article/install_the_command_line_c_compilers_in_os_x_lion</a>

The solution is to install XCode, then enable command line compilers from the XCode console.

2. Finding and installing an appropriate Java JDK for my OS version

Used this resource to eventually figure out what to do:
<a href="http://www.wikihow.com/Install-the-JDK-(Java-Development-Kit">http://www.wikihow.com/Install-the-JDK-(Java-Development-Kit</a>)-on-Mac-OS-X

It didn't exactly match my setup, but had enough clues.
The solution is to first find your java version (java -version, 1.6.0_37 in my case) and then match that version number to the Apple Java update version (11 in my case).&#160;
The key document is:
<a href="http://developer.apple.com/library/mac/#technotes/tn2002/tn2110.html">http://developer.apple.com/library/mac/#technotes/tn2002/tn2110.html</a>

Which is a table relating java version numbers to the appropriate &quot;Java for Mac OS X xx.x Update xx&quot;.
Once you know the update number, you can download the JDK installer from
<a href="https://developer.apple.com/downloads/index.action">https://developer.apple.com/downloads/index.action</a>

where you of course have to have an Apple developer ID to access.
Enter &quot;java&quot; in the search bar on the left and find the matching java update, and you're good to go.

3. Building and installing OpenMPI for the first time on a Mac

After the usual false starts with a new installation on a new OS, I managed to get a working build of&#160;openmpi-1.7rc5 with Java bindings.
I could only find the java bindings in the 1.7 pre-release.
I used the defaults as much as possible.&#160;

After downloading from:
<a href="http://www.open-mpi.org/software/ompi/v1.7/">http://www.open-mpi.org/software/ompi/v1.7/</a>

and unarchiving to Downloads, open a Terminal window.

cd Downloads/openmpi-1.7rc5
./configure --enable-java --prefix=/usr/local
make all
sudo make install

Verify that you can run the commands and examples:

chuck-&gt; /usr/local/bin/mpirun -version
mpirun (Open MPI) 1.7rc5

chuck-&gt; cd examples
chuck-&gt; make
chuck-&gt;&#160;/usr/local/bin/mpirun -np 2 hello_c
Hello, world, I am 0 of 2, (Open MPI v1.7rc5, package: Open MPI chuck_at_chucks-iMac.local Distribution, ident: 1.7rc5, Oct 30, 2012, 111)
Hello, world, I am 1 of 2, (Open MPI v1.7rc5, package: Open MPI chuck_at_chucks-iMac.local Distribution, ident: 1.7rc5, Oct 30, 2012, 111)

4. Conflicts with the existing OpenMPI version 1.2.8 that was installed already on my Mac

OpenMPI Version 1.2.8 was already installed for my OS in /usr/bin
So, if you accidentally type:

chuck-&gt; mpirun -np 2 hello_c
--------------------------------------------------------------------------
A requested component was not found, or was unable to be opened
...

you picked up the wrong &quot;mpirun&quot; and you will get a bunch of error output complaining about sockets or mis-matched shared library versions.

I dealt with this moving the existing OpenMPI related commands to a subdirectory, and then created symbolic links from /usr/local/bin to /usr/bin for the commands I needed.

5. Figuring out syntax for using the mpirun command line to run java

First be sure you can run Java

chuck-&gt; /usr/bin/java -version
java version &quot;1.6.0_37&quot;
Java(TM) SE Runtime Environment (build 1.6.0_37-b06-434-10M3909)
Java HotSpot(TM) 64-Bit Server VM (build 20.12-b01-434, mixed mode)

Then be sure you can run your java class from the command line as well. To figure this out I created a couple of simple java files in a temp directory:

chuck-&gt; cd ~/tmp
chuck-&gt; mkdir classes
chuck -&gt; cat HelloWorld.java

public class HelloWorld {
&#160; public static void main(String[] args) {
&#160; &#160; System.out.println(&quot;Hello World, from Java !&quot;);
&#160; }
}

chuck-&gt; javac -d classes HelloWorld.java
chuck-&gt; java -cp ./classes HelloWorld

Hello World, from Java !

No sense going further until you can get the code above to run.
If you have that working, then you can try the MPI version of HelloWorld:

chuck-&gt; cat HelloWorldMPI.java

import mpi.*;
class HelloWorldMPI {
&#160; public static void main(String[] args) throws MPIException {
&#160; &#160; MPI.Init(args);
&#160; &#160; System.out.println(&quot;Hello world from rank &quot; +&#160;
&#160; &#160; &#160; MPI.COMM_WORLD.Rank() + &quot; of &quot; +
&#160; &#160; &#160; MPI.COMM_WORLD.Size() );
&#160; &#160; MPI.Finalize();
&#160; }
}

chuck-&gt; /usr/local/bin/mpijavac -d classes HelloWorldMPI.java

/usr/local/bin/mpirun -np 2 /usr/bin/java -cp ./classes HelloWorldMPI

Hello world from rank 0 of 2
Hello world from rank 1 of 2

And you're ready to go !
Except for one last thing ...
6. Odd behavior when trying to use &quot;localhost&quot; or the output from `hostname` on the command line or in a hostfile
You will note in the examples above no host names, hostifle, or appfile was used.
I found that trying to use &quot;-host localhost&quot; or &quot;-hostfile hostfile&quot; which contained &quot;localhost&quot; would not work:

mpirun -host localhost -np 2 ...

in the examples above would not work, returning:

chuck$ /usr/local/bin/mpirun -host localhost -np 2 /usr/bin/java -cp ./classes HelloWorldMPI
--------------------------------------------------------------------------
All nodes which are allocated for this job are already filled.
--------------------------------------------------------------------------

I posted this in a previous e-mail to this list, and it looks like a bug.
You can get around it by using the output from `hostname -s` which provides a trimmed name:

chuck-&gt; /usr/local/bin/mpirun -host `hostname -s` -np 2 /usr/bin/java -cp ./classes HelloWorldMPI
Hello world from rank 0 of 2
Hello world from rank 1 of 2

You will also need to use this name in any hostfiles or appfiles as well until the bug is fixed.

Thanks to all for this great product !

Chuck Mosher for JavaSeis.org
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21066/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21067.php">Doug Reeder: "Re: [OMPI users] MPI Java Bindings on Mac OSX"</a>
<li><strong>Previous message:</strong> <a href="21065.php">Ake Sandgren: "Re: [OMPI users] grpcomm component hier gone..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21067.php">Doug Reeder: "Re: [OMPI users] MPI Java Bindings on Mac OSX"</a>
<li><strong>Reply:</strong> <a href="21067.php">Doug Reeder: "Re: [OMPI users] MPI Java Bindings on Mac OSX"</a>
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

<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Aug  4 05:59:51 2005" -->
<!-- isoreceived="20050804105951" -->
<!-- sent="Thu, 4 Aug 2005 06:59:44 -0400" -->
<!-- isosent="20050804105944" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re:  Fwd: Regarding MVAPI Component in Open MPI" -->
<!-- id="1c47e282f7c52bcbed27ca2fb7718932_at_open-mpi.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="df91b9040fb32ccc0cabc302323b821f_at_open-mpi.org" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-08-04 05:59:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0075.php">Jeff Squyres: "Re:  broken rmgr?"</a>
<li><strong>Previous message:</strong> <a href="0073.php">Jeff Squyres: "Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>In reply to:</strong> <a href="0073.php">Jeff Squyres: "Fwd: Regarding MVAPI Component in Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0080.php">Sridhar Chirravuri \(schirrav\): "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>Reply:</strong> <a href="0080.php">Sridhar Chirravuri \(schirrav\): "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>Maybe reply:</strong> <a href="0083.php">Sridhar Chirravuri: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>Maybe reply:</strong> <a href="0084.php">Sridhar Chirravuri: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>Maybe reply:</strong> <a href="0098.php">Sridhar Chirravuri: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>Maybe reply:</strong> <a href="0103.php">Sridhar Chirravuri: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>Maybe reply:</strong> <a href="0104.php">Sridhar Chirravuri: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>Maybe reply:</strong> <a href="0105.php">Sridhar Chirravuri: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>Maybe reply:</strong> <a href="0108.php">Sridhar Chirravuri: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>Maybe reply:</strong> <a href="0109.php">Sridhar Chirravuri: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>Maybe reply:</strong> <a href="0112.php">Sridhar Chirravuri: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>Maybe reply:</strong> <a href="0118.php">George Bosilca: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>Maybe reply:</strong> <a href="0120.php">Sridhar Chirravuri: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>Maybe reply:</strong> <a href="0168.php">Sridhar Chirravuri: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>Maybe reply:</strong> <a href="0170.php">Sridhar Chirravuri: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>Maybe reply:</strong> <a href="0185.php">Sridhar Chirravuri: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 4, 2005, at 6:43 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev2">&gt;&gt; I got OpenMPI tar ball and could configure and build on AMD x86_64
</span><br>
<span class="quotelev2">&gt;&gt; arch.
</span><br>
<p>Excellent.  Note, however, that it's probably better to get a 
<br>
Subversion checkout.  As this is the current head of our development 
<br>
tree, it's a constantly moving target -- having a Subversion checkout 
<br>
will help you keep up with our progress.
<br>
<p><span class="quotelev2">&gt;&gt; In our case, we need to enable MVAPI and disable OpenIB. For this, I
</span><br>
<span class="quotelev2">&gt;&gt; have moved .ompi_ignore file from mvapi directory to openib directory.
</span><br>
<span class="quotelev2">&gt;&gt; I could see that OpenIB was disabled as the entire openib tree was
</span><br>
<span class="quotelev2">&gt;&gt; skipped by the autogen.sh script.
</span><br>
<p>It depends on what version of the tarball you got -- in the version 
<br>
that I have, the mvapi components (both btl and mpool) do not have 
<br>
.ompi_ignore files (we recently removed them -- July 27th, r6613).
<br>
<p>Additionally, you should not need to run autogen.sh in a tarball (in 
<br>
fact, autogen.sh should warn you if you try to do this).  autogen.sh is 
<br>
only required in a Subversion checkout.  Please see the top-level 
<br>
HACKING file in a Subversion checkout (I don't think that it is 
<br>
included in the tarball).
<br>
<p>Finally, note that you'll need to give additional --with options to 
<br>
configure to tell it where the MVAPI libraries and header files are 
<br>
located -- more on this below.
<br>
<p><span class="quotelev2">&gt;&gt; While running Pallas accross the nodes, I could see that data is
</span><br>
<span class="quotelev2">&gt;&gt; passing over Gigbit ethernet and NOT over Infiniband.&#160; Does anyone has
</span><br>
<span class="quotelev2">&gt;&gt; idea about why data is going through Gig and NOT over infiniband? Do I
</span><br>
<span class="quotelev2">&gt;&gt; have to set any configuration options? Do I have to give any run-time
</span><br>
<span class="quotelev2">&gt;&gt; options? I have tried with mpirun -mca btl mvapi but of no use.
</span><br>
<p>What is the output of the ompi_info command?  This will tell you if the 
<br>
mvapi component is compiled and installed (it sounds like it is not).
<br>
<p><span class="quotelev2">&gt;&gt; I could make out that TCP component is being used and in order to
</span><br>
<span class="quotelev2">&gt;&gt; disable tcp, I have copied .ompi_ignore in to directories
</span><br>
<span class="quotelev2">&gt;&gt; /ompi/orte/mca/oob/tcp and /ompi/ompi/mca/ptl/tcp. But this time
</span><br>
<span class="quotelev2">&gt;&gt; program fails with segmentation fault error.
</span><br>
<p>Right now, IIRC, we don't have checks to ensure that there are valid 
<br>
paths from one MPI process to another -- which is probably the seg 
<br>
fault.
<br>
<p>Also note that .ompi_ignore is an autogen mechanism.  It is really 
<br>
intended for developers who want to protect parts of the tree during 
<br>
development when it is not ready for general use.  It is not really 
<br>
intended
<br>
<p><span class="quotelev2">&gt;&gt; These are the configure options that I have given while configuring
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI.
</span><br>
<span class="quotelev2">&gt;&gt; &#160;
</span><br>
<span class="quotelev2">&gt;&gt; ./configure --prefix=/openmpi --with-btl-mvapi=/usr/local/topspin/
</span><br>
<span class="quotelev2">&gt;&gt; --with-btl-mvapi-libdir=/usr/local/topspin --with-mvapi
</span><br>
<p>Almost correct.  Check out ./configure --help:
<br>
<p>&nbsp;&nbsp;&nbsp;--with-btl-mvapi=MVAPI_DIR
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Additional directory to search for MVAPI
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;installation
<br>
&nbsp;&nbsp;&nbsp;--with-btl-mvapi-libdir=IBLIBDIR
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;directory where the IB library can be found, 
<br>
if it
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;is not in MVAPI_DIR/lib or MVAPI_DIR/lib64
<br>
<p>The --with-btl-mvapi-libdir flag is only necessary if the MVAPI library 
<br>
cannot be found the /usr/local/topspin/lib or /usr/local/topspin/lib64. 
<br>
&nbsp;&nbsp;There is no --with-mvapi flag.
<br>
<p>So it's quite possible that with the wrong value for 
<br>
--with-btl-mvapi-libdir, it failed to compile the mvapi component 
<br>
(i.e., I suspect it was looking for /usr/local/topspin/libmosal.* when 
<br>
libmosal is most likely in /usr/local/topspin/lib or 
<br>
/usr/local/topspin/lib64), which resulted in Open MPI falling back to 
<br>
TCP/GigE.
<br>
<p>After you install Open MPI, you can run the ompi_info command and it 
<br>
will show a list of all the installed components.  You should see the 
<br>
mvapi component in both the btl and mpool frameworks if all went well.  
<br>
If it didn't, then send us the output (stdout and stderr) of configure, 
<br>
the top-level config.log file, and the output from &quot;make all&quot; (please 
<br>
compress!) and we can have a look to see what went wrong.
<br>
<p>Once you have the mvapi components built, you can choose to use them at 
<br>
run-time via switches to mpirun.  See the slides that we talked through 
<br>
on the teleconference -- I provided some examples (you can set these 
<br>
via command line arguments, environment variables, or files).
<br>
<p>For one thing, you need to manually specify to use the 3rd generation 
<br>
p2p stuff in Open MPI -- our 2nd generation is still currently the 
<br>
default (that will likely change in the near future, but it hasn't been 
<br>
done yet).  For example:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun --mca pml ob1 --mca btl mvapi,self -np 4 a.out
<br>
<p>This tells the pml to use the &quot;ob1&quot; component (i.e., the 3rd generation 
<br>
p2p stuff) and to use the mvapi and self btl components (self is 
<br>
loopback -- one processing sending to itself).
<br>
<p>Give that a whirl and let us know how it goes.
<br>
<p><pre>
-- 
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0075.php">Jeff Squyres: "Re:  broken rmgr?"</a>
<li><strong>Previous message:</strong> <a href="0073.php">Jeff Squyres: "Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>In reply to:</strong> <a href="0073.php">Jeff Squyres: "Fwd: Regarding MVAPI Component in Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0080.php">Sridhar Chirravuri \(schirrav\): "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>Reply:</strong> <a href="0080.php">Sridhar Chirravuri \(schirrav\): "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>Maybe reply:</strong> <a href="0083.php">Sridhar Chirravuri: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>Maybe reply:</strong> <a href="0084.php">Sridhar Chirravuri: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>Maybe reply:</strong> <a href="0098.php">Sridhar Chirravuri: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>Maybe reply:</strong> <a href="0103.php">Sridhar Chirravuri: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>Maybe reply:</strong> <a href="0104.php">Sridhar Chirravuri: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>Maybe reply:</strong> <a href="0105.php">Sridhar Chirravuri: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>Maybe reply:</strong> <a href="0108.php">Sridhar Chirravuri: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>Maybe reply:</strong> <a href="0109.php">Sridhar Chirravuri: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>Maybe reply:</strong> <a href="0112.php">Sridhar Chirravuri: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>Maybe reply:</strong> <a href="0118.php">George Bosilca: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>Maybe reply:</strong> <a href="0120.php">Sridhar Chirravuri: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>Maybe reply:</strong> <a href="0168.php">Sridhar Chirravuri: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>Maybe reply:</strong> <a href="0170.php">Sridhar Chirravuri: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>Maybe reply:</strong> <a href="0185.php">Sridhar Chirravuri: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
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

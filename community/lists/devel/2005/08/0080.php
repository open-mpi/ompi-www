<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Aug  5 07:02:55 2005" -->
<!-- isoreceived="20050805120255" -->
<!-- sent="Fri, 5 Aug 2005 17:32:27 +0530" -->
<!-- isosent="20050805120227" -->
<!-- name="Sridhar Chirravuri \(schirrav\)" -->
<!-- email="schirrav_at_[hidden]" -->
<!-- subject="Re:  Fwd: Regarding MVAPI Component in Open MPI" -->
<!-- id="AAC329F11B438F43BBA91F50013A69B62453F0_at_xmb-blr-413.apac.cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1c47e282f7c52bcbed27ca2fb7718932_at_open-mpi.org" -->
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
<strong>From:</strong> Sridhar Chirravuri \(schirrav\) (<em>schirrav_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-08-05 07:02:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0081.php">Jeff Squyres: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>Previous message:</strong> <a href="0079.php">Greg Watson: "Re:  os x build"</a>
<li><strong>In reply to:</strong> <a href="0074.php">Jeff Squyres: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0081.php">Jeff Squyres: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>Reply:</strong> <a href="0081.php">Jeff Squyres: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;
<br>
Hi,
<br>
&nbsp;
<br>
Thanks for the information.
<br>
&nbsp;
<br>
Here is the output of ompi_info
<br>
&nbsp;
<br>
[root_at_micrompi-1 ompi]# ompi_info
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open MPI: 1.0a1r6612M
<br>
&nbsp;&nbsp;&nbsp;Open MPI SVN revision: r6612M
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open RTE: 1.0a1r6612M
<br>
&nbsp;&nbsp;&nbsp;Open RTE SVN revision: r6612M
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL: 1.0a1r6612M
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL SVN revision: r6612M
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Prefix: /openmpi
<br>
&nbsp;Configured architecture: x86_64-redhat-linux-gnu
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configured by: root
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configured on: Thu Aug  4 23:31:51 IST 2005
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configure host: micrompi-1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Built by: root
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Built on: Thu Aug  4 23:43:29 IST 2005
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Built host: micrompi-1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C bindings: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ bindings: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran77 bindings: yes (all)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran90 bindings: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C compiler: gcc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C compiler absolute: /usr/bin/gcc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ compiler: g++
<br>
&nbsp;&nbsp;&nbsp;C++ compiler absolute: /usr/bin/g++
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran77 compiler: g77
<br>
&nbsp;&nbsp;Fortran77 compiler abs: /usr/bin/g77
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran90 compiler: none
<br>
&nbsp;&nbsp;Fortran90 compiler abs: none
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C profiling: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ profiling: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran77 profiling: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran90 profiling: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ exceptions: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thread support: posix (mpi: no, progress: no)
<br>
&nbsp;&nbsp;Internal debug support: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI parameter check: runtime
<br>
Memory profiling support: yes
<br>
Memory debugging support: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libltdl support: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA allocator: basic (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA allocator: bucket (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: basic (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: self (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA io: romio (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA mpool: mvapi (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA mpool: sm (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pml: teg (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pml: uniq (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ptl: self (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ptl: sm (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ptl: tcp (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA topo: unity (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA gpr: proxy (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA gpr: replica (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA iof: proxy (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA iof: svc (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ns: proxy (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ns: replica (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA oob: tcp (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ras: host (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rds: hostfile (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rds: resfile (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rmaps: round_robin (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rmgr: proxy (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rmgr: urm (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rml: oob (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pls: fork (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pls: proxy (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pls: rsh (MCA v1.0, API v1.0, Component v1.0)
<br>
<p>&nbsp;
<br>
The OpenMPI version that I am using r6612 (I could see from the output ompi_info command). There is NO btl frame where as mpool was built.
<br>
&nbsp;
<br>
In the configure options, giving  --with-btl-mvapi=/opt/topspin would sufficient as it has got include and lib64 directories. Therefore it will pick up the necessary things. Also, I have set the following flags
<br>
&nbsp;
<br>
&nbsp;
<br>
export CFLAGS=&quot;-I/optl/topspin/include -I/opt/topspin/include/vapi&quot;
<br>
export LDFLAGS=&quot;-lmosal -lvapi -L/opt/topspin/lib64&quot;
<br>
export btl_mvapi_LDFLAGS=$LDFLAGS
<br>
export btl_mvapi_LIBS=$LDFLAGS
<br>
&nbsp;
<br>
I will configure and build the latest code. To get the latest code, I have run the following command. Please let me know if I am not correct.
<br>
&nbsp;
<br>
svn co -r6613 <a href="http://svn.open-mpi.org/svn/ompi/trunk">http://svn.open-mpi.org/svn/ompi/trunk</a> ompi
<br>
&nbsp;
<br>
Configured as..
<br>
&nbsp;
<br>
./configure --prefix=/openmpi --with-btl-mvapi=/opt/topspin/ 
<br>
&nbsp;
<br>
When I gave make all, it is configuring again and again, I mean it is going in a loop. In my machine, I do not need libmpga and libmtl_common, hence I removed -lmpga and -lmtl_common entries from config/ompi_check_mvapi.m4 file and then ran autogen.sh. 
<br>
&nbsp;
<br>
I don't have any clue why the configuration is going in loop even while building. I could see that config.status --recheck is being issued from Makefile and I feel this might the reason for configure to run in loop.
<br>
&nbsp;
<br>
&nbsp;
<br>
Can someone help in this?
<br>
&nbsp;
<br>
Thanks
<br>
-Sridhar
<br>
<p>________________________________
<br>
<p>From: devel-bounces_at_[hidden] on behalf of Jeff Squyres
<br>
Sent: Thu 8/4/2005 4:29 PM
<br>
To: Open MPI Developers
<br>
Subject: Re: [O-MPI devel] Fwd: Regarding MVAPI Component in Open MPI
<br>
<p><p><p>On Aug 4, 2005, at 6:43 AM, Jeff Squyres wrote:
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
<span class="quotelev2">&gt;&gt; passing over Gigbit ethernet and NOT over Infiniband.  Does anyone has
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
<span class="quotelev2">&gt;&gt;  
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
_______________________________________________
devel mailing list
devel_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</pre>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="../../att-0080/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0081.php">Jeff Squyres: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>Previous message:</strong> <a href="0079.php">Greg Watson: "Re:  os x build"</a>
<li><strong>In reply to:</strong> <a href="0074.php">Jeff Squyres: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0081.php">Jeff Squyres: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>Reply:</strong> <a href="0081.php">Jeff Squyres: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
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

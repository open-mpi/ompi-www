<?
$subject_val = "Re: [OMPI users] Open MPI program cannot complete";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 25 17:30:16 2010" -->
<!-- isoreceived="20101025213016" -->
<!-- sent="Mon, 25 Oct 2010 15:30:10 -0600" -->
<!-- isosent="20101025213010" -->
<!-- name="Jack Bryan" -->
<!-- email="dtustudy68_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI program cannot complete" -->
<!-- id="SNT134-w651BBF2D8B84895C31DF91CB410_at_phx.gbl" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="B65C0579-B9D7-4ED9-B4BB-B5360E3524F0_at_pittman.co.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open MPI program cannot complete<br>
<strong>From:</strong> Jack Bryan (<em>dtustudy68_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-25 17:30:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14619.php">christophe petit: "[OMPI users] try to understand heat equation 2D mpi solving version"</a>
<li><strong>Previous message:</strong> <a href="14617.php">David Zhang: "Re: [OMPI users] Open MPI program cannot complete"</a>
<li><strong>In reply to:</strong> <a href="14616.php">Ashley Pittman: "Re: [OMPI users] Open MPI program cannot complete"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14620.php">Jack Bryan: "Re: [OMPI users] Open MPI program cannot complete"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks
<br>
I have downloaded <a href="http://padb.googlecode.com/files/padb-3.2-beta1.tar.gz">http://padb.googlecode.com/files/padb-3.2-beta1.tar.gz</a>
<br>
and followed the instructions of INSTALL file and installed it at /mypath/padb32 
<br>
But, I got:
<br>
-bash-3.2$ padb -Ormgr=pbs -Q 48279.clusterJob 48279.cluster is not active
<br>
Actually, the job was running. 
<br>
I have installed bin at  
<br>
/mypath/padb32/bin
<br>
<p>libexec  at/lustre/jxding/padb32/libexec
<br>
When I installed it, I used 
<br>
./configure --prefix=/mypath/padb32
<br>
I got -----------------------------
<br>
checking for a BSD-compatible install... /usr/bin/install -cchecking whether build environment is sane... yeschecking for a thread-safe mkdir -p... /bin/mkdir -pchecking for gawk... gawkchecking whether make sets $(MAKE)... yeschecking for gcc... gccchecking whether the C compiler works... yeschecking for C compiler default output file name... a.outchecking for suffix of executables...checking whether we are cross compiling... nochecking for suffix of object files... ochecking whether we are using the GNU C compiler... yeschecking whether gcc accepts -g... yeschecking for gcc option to accept ISO C89... none neededchecking for style of include used by make... GNUchecking dependency style of gcc... gcc3checking whether gcc and cc understand -c and -o together... yesconfigure: creating ./config.statusconfig.status: creating Makefileconfig.status: creating src/Makefileconfig.status: executing depfiles commands
<br>
-------------------------------
<br>
-bash-3.2$ makeMaking all in srcmake[1]: Entering directory `/mypath/padb32/padb-3.2-beta1/src'gcc -DPACKAGE_NAME=\&quot;\&quot; -DPACKAGE_TARNAME=\&quot;\&quot; -DPACKAGE_VERSION=\&quot;\&quot; -DPACKAGE_STRING=\&quot;\&quot; -DPACKAGE_BUGREPORT=\&quot;\&quot; -DPACKAGE_URL=\&quot;\&quot; -DPACKAGE=\&quot;padb\&quot; -DVERSION=\&quot;3.2-beta1\&quot; -I.    -Wall -g -O2 -MT minfo-minfo.o -MD -MP -MF .deps/minfo-minfo.Tpo -c -o minfo-minfo.o `test -f 'minfo.c' || echo './'`minfo.cminfo.c: In function &#226;find_sym&#226;:minfo.c:158: warning: dereferencing type-punned pointer will break strict-aliasing rulesminfo.c: In function &#226;main&#226;:minfo.c:649: warning: type-punning to incomplete type might break strict-aliasing rulesminfo.c:650: warning: type-punning to incomplete type might break strict-aliasing rulesmv -f .deps/minfo-minfo.Tpo .deps/minfo-minfo.Pogcc -Wall -g -O2 -ldl  -o minfo minfo-minfo.omake[1]: Leaving directory `/mypath/padb32/padb-3.2-beta1/src'make[1]: Entering directory `/mypath/padb32/padb-3.2-beta1'make[1]: Nothing to be done for `all-am'.make[1]: Leaving directory `/mypath/padb32/padb-3.2-beta1'-------------------------------------------------
<br>
-bash-3.2$ make installMaking install in srcmake[1]: Entering directory `/mypath/padb32/padb-3.2-beta1/src'make[2]: Entering directory `/mypath/padb32/padb-3.2-beta1/src'test -z &quot;/lustre/jxding/padb32/bin&quot; || /bin/mkdir -p &quot;/mypath/padb32/bin&quot; /usr/bin/install -c padb '/lustre/jxding/padb32/bin'test -z &quot;/lustre/jxding/padb32/libexec&quot; || /bin/mkdir -p &quot;/mypath/padb32/libexec&quot;  /usr/bin/install -c minfo '/lustre/jxding/padb32/libexec'make[2]: Nothing to be done for `install-data-am'.make[2]: Leaving directory `/mypath/padb32/padb-3.2-beta1/src'make[1]: Leaving directory `/mypath/padb32/padb-3.2-beta1/src'make[1]: Entering directory `/mypath/padb32/padb-3.2-beta1'make[2]: Entering directory `/mypath/padb32/padb-3.2-beta1'make[2]: Nothing to be done for `install-exec-am'.make[2]: Nothing to be done for `install-data-am'.make[2]: Leaving directory `/mypath/padb32/padb-3.2-beta1'make[1]: Leaving directory `/mypath/padb32/padb-3.2-beta1'-bash-3.2$ make installcheckMaking installcheck in srcmake[1]: Entering directory `/mypath/padb32/padb-3.2-beta1/src'make[1]: Nothing to be done for `installcheck'.make[1]: Leaving directory `/mypath/padb32/padb-3.2-beta1/src'make[1]: Entering directory `/mypath/padb32/padb-3.2-beta1'make[1]: Nothing to be done for `installcheck-am'.make[1]: Leaving directory `/mypath/padb32/padb-3.2-beta1'--------------------------------------------------
<br>
Are there something wrong with what I have done ?
<br>
Any help is appreciated. 
<br>
thanks
<br>
Jack
<br>
Oct. 25 2010
<br>
<p><span class="quotelev1">&gt; From: ashley_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Date: Mon, 25 Oct 2010 20:40:18 +0100
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Open MPI program cannot complete
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 25 Oct 2010, at 20:18, Jack Bryan wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Thanks
</span><br>
<span class="quotelev2">&gt; &gt; I have downloaded 
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://padb.googlecode.com/files/padb-3.0.tgz">http://padb.googlecode.com/files/padb-3.0.tgz</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; and compile it.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; But, no user manual, I can not use it by padb -aQ.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The -a flag is a shortcut to all jobs, if you are providing a jobid (which is normally numeric) then don't set the -a flag.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Do you have use manual about how to use it ? 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In my previous mail I was assuming you were using orte to launch the jobs but if you are using PBS then you'll need to use the 3.2 beta as the PBS code is new, alternatively you could find the host where the PBS script itself runs and check of the &quot;ompi-ps&quot; command gives you any output, if it does then you could run it from there giving it the orte jobid.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A bit of background about resource managers (in which I'm including orte and PBS), padb supports many resource managers and tries to automatically detect which ones you have installed on your system.  If you don't specify one then it'll see what is installed, if there is more than one resource manager installed then it'll see which of them claim to have active jobs - if only one resource manager meets this criteria then it'll pick that one - hence 99% of the time it should just work.  If more than one resource manager claims to have active jobs then padb will refuse to run but ask the user to specify one explicitly.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You should try the following in order once you have 3.2 installed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; padb -Ormgr=pbs -Q &lt;myjob&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Or - find the node where the PBS script is being executed, check that the ompi-ps command is returning the jobid and then run
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; padb -Ormgr=orte -Q &lt;openmpi_jobid&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ashley,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ashley Pittman, Bath, UK.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Padb - A parallel job inspection tool for cluster computing
</span><br>
<span class="quotelev1">&gt; <a href="http://padb.pittman.org.uk">http://padb.pittman.org.uk</a>
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
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14618/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14619.php">christophe petit: "[OMPI users] try to understand heat equation 2D mpi solving version"</a>
<li><strong>Previous message:</strong> <a href="14617.php">David Zhang: "Re: [OMPI users] Open MPI program cannot complete"</a>
<li><strong>In reply to:</strong> <a href="14616.php">Ashley Pittman: "Re: [OMPI users] Open MPI program cannot complete"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14620.php">Jack Bryan: "Re: [OMPI users] Open MPI program cannot complete"</a>
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

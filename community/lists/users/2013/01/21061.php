<?
$subject_val = "Re: [OMPI users] mpirun - All Nodes Filled";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  3 10:02:36 2013" -->
<!-- isoreceived="20130103150236" -->
<!-- sent="Thu, 3 Jan 2013 07:02:24 -0800" -->
<!-- isosent="20130103150224" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun - All Nodes Filled" -->
<!-- id="7B2BBD6C-A9F8-4151-B633-3E6BE7E23073_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1357224827.94911.YahooMailNeo_at_web141104.mail.bf1.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun - All Nodes Filled<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-03 10:02:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21062.php">Ake Sandgren: "Re: [OMPI users] grpcomm component hier gone..."</a>
<li><strong>Previous message:</strong> <a href="21060.php">Ralph Castain: "Re: [OMPI users] grpcomm component hier gone..."</a>
<li><strong>In reply to:</strong> <a href="21059.php">Chuck Mosher: "[OMPI users] mpirun - All Nodes Filled"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21064.php">Chuck Mosher: "Re: [OMPI users] mpirun - All Nodes Filled"</a>
<li><strong>Reply:</strong> <a href="21064.php">Chuck Mosher: "Re: [OMPI users] mpirun - All Nodes Filled"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmmm...I would say there is a bug in 1.7 then! It isn't recognizing the word &quot;localhost&quot; as being your local host. I'll take a look at it.
<br>
<p>Thanks!
<br>
<p>On Jan 3, 2013, at 6:53 AM, Chuck Mosher &lt;chuckmosher_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Simple question for today !
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am working on converting a public domain code suite (<a href="http://www.JavaSeis.org">http://www.JavaSeis.org</a>) to use openmpi rather than mpiJava.
</span><br>
<span class="quotelev1">&gt; So far, all has gone well, other than the usual issues with getting all the paths and variables straightened out.
</span><br>
<span class="quotelev1">&gt; For automation purposes, I would like to be able to specify everything from the command line, rather than using files.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Why does this command work:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; chuck-&gt; /usr/local/bin/mpirun -np 1 /usr/bin/java -version
</span><br>
<span class="quotelev1">&gt; java version &quot;1.6.0_37&quot;
</span><br>
<span class="quotelev1">&gt; Java(TM) SE Runtime Environment (build 1.6.0_37-b06-434-10M3909)
</span><br>
<span class="quotelev1">&gt; Java HotSpot(TM) 64-Bit Server VM (build 20.12-b01-434, mixed mode)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But this one does not:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; chuck-&gt; /usr/local/bin/mpirun -np 1  -host localhost /usr/bin/java -version
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; All nodes which are allocated for this job are already filled.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Nor does this one:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; chuck-&gt; cat hostfile
</span><br>
<span class="quotelev1">&gt; localhost slots=2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; chuck-&gt;/usr/local/bin/mpirun -np 1 -hostfile hostfile /usr/bin/java -cp . -version
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; All nodes which are allocated for this job are already filled.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For reference:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; chuck-&gt; /usr/local/bin/mpirun -version
</span><br>
<span class="quotelev1">&gt; mpirun (Open MPI) 1.7rc5
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Report bugs to <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; chuck-&gt; uname -a
</span><br>
<span class="quotelev1">&gt; Darwin iMac.local 10.8.0 Darwin Kernel Version 10.8.0: Tue Jun  7 16:32:41 PDT 2011; root:xnu-1504.15.3~1/RELEASE_X86_64 x86_64
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My build was done with &quot;configure --enable-mpi-java --prefix=/usr/local&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for any insight !
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Chuck Mosher
</span><br>
<span class="quotelev1">&gt; chuckmosher_at_[hidden]
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21061/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21062.php">Ake Sandgren: "Re: [OMPI users] grpcomm component hier gone..."</a>
<li><strong>Previous message:</strong> <a href="21060.php">Ralph Castain: "Re: [OMPI users] grpcomm component hier gone..."</a>
<li><strong>In reply to:</strong> <a href="21059.php">Chuck Mosher: "[OMPI users] mpirun - All Nodes Filled"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21064.php">Chuck Mosher: "Re: [OMPI users] mpirun - All Nodes Filled"</a>
<li><strong>Reply:</strong> <a href="21064.php">Chuck Mosher: "Re: [OMPI users] mpirun - All Nodes Filled"</a>
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

<?
$subject_val = "Re: [OMPI users] Open MPI on Cray XE6 / Gemini";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 17 08:50:32 2012" -->
<!-- isoreceived="20121017125032" -->
<!-- sent="Wed, 17 Oct 2012 14:50:22 +0200" -->
<!-- isosent="20121017125022" -->
<!-- name="Christoph Niethammer" -->
<!-- email="niethammer_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI on Cray XE6 / Gemini" -->
<!-- id="201210171450.22871.niethammer_at_hlrs.de" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="56392574-8FFF-45EC-83AC-072838CA5205_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open MPI on Cray XE6 / Gemini<br>
<strong>From:</strong> Christoph Niethammer (<em>niethammer_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-17 08:50:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20500.php">Ralph Castain: "Re: [OMPI users] singleton spawn regression"</a>
<li><strong>Previous message:</strong> <a href="20498.php">R C: "[OMPI users] [SPAM:### 85%]"</a>
<li><strong>In reply to:</strong> <a href="20463.php">Ralph Castain: "Re: [OMPI users] Open MPI on Cray XE6 / Gemini"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>First I would like to thank you for all your answers. :)
<br>
<p>I do all my tests on the mom nodes requested through the queuing system. In 
<br>
other cases I cannot access the compute nodes. Also the installation needs to 
<br>
see the appropriate libs and header files - which are not available on the 
<br>
login nodes here. ;)
<br>
<p>In my first test I used mpirun as this was build with alps support and should 
<br>
by this be able to handle the startup on the compute nodes.
<br>
I followed your suggestions and tried aprun too which gave me the same error.
<br>
<p>A installation using the pmi 2.1.4 interface did not report errors but hangs 
<br>
silently during the startup process. 
<br>
<p>Best regards
<br>
Christoph
<br>
<p>On Wednesday 10 October 2012 20:55:15 Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Sorry - I saw the &quot;pirun&quot; cmd and thought it was some kind of Cray cmd
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sent from my iPhone
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Oct 10, 2012, at 9:11 AM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; He is using mpirun from what I can see. And in this case the orted will
</span><br>
<span class="quotelev2">&gt; &gt; use PMI but the app will use the tcp oob to talk to the orted since
</span><br>
<span class="quotelev2">&gt; &gt; there is no shmem oob atm.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -Nathan
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Wed, Oct 10, 2012 at 08:04:20AM -0700, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hi Nathan
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The only way to get that OOB error is if PMI isn't running - hence my
</span><br>
<span class="quotelev3">&gt; &gt;&gt; earlier note. If PMI isn't actually running, then we fall back to the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; TCP OOB and try to open sockets - which won't work because the app is
</span><br>
<span class="quotelev3">&gt; &gt;&gt; being direct-launched.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Alternatively, he could launch using &quot;mpirun&quot; and then it should work
</span><br>
<span class="quotelev3">&gt; &gt;&gt; just fine.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Wed, Oct 10, 2012 at 7:59 AM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; On Wed, Oct 10, 2012 at 02:50:59PM +0200, Christoph Niethammer wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; I just tried to use Open MPI 1.7a1r27416 on a Cray XE6 system.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Unfortunately I
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; get the following error when I run a simple HelloWorldMPI program:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; $ pirun HelloWorldMPI
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; App launch reported: 2 (out of 2) daemons - 0 (out of 32) procs
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; ...
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [unset]:_pmi_alps_get_appLayout:pmi_alps_get_apid returned with error:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Bad
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; file descriptor
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; There is a bug in Cray's PMI-3 which causes this error message. Change
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; the platform file to point at PMI 2.1.4. I was hoping Cray would fix
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; the bug before 1.7.0. Since that doesn't appear to be the case I will
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; push updated platform files that use PMI 2.1.4 instead of the default.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [nid01766:20603] mca_oob_tcp_init: unable to create IPv4 listen socket:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Unable
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; to open a TCP socket for out-of-band communications
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; ...
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Never seen this error before. What PE release is installed?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; -Nathan
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20499/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20500.php">Ralph Castain: "Re: [OMPI users] singleton spawn regression"</a>
<li><strong>Previous message:</strong> <a href="20498.php">R C: "[OMPI users] [SPAM:### 85%]"</a>
<li><strong>In reply to:</strong> <a href="20463.php">Ralph Castain: "Re: [OMPI users] Open MPI on Cray XE6 / Gemini"</a>
<!-- nextthread="start" -->
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

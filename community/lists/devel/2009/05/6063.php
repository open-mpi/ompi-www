<?
$subject_val = "Re: [OMPI devel] ompi-ps broken or just changed?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 18 10:08:22 2009" -->
<!-- isoreceived="20090518140822" -->
<!-- sent="Mon, 18 May 2009 08:08:04 -0600" -->
<!-- isosent="20090518140804" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] ompi-ps broken or just changed?" -->
<!-- id="D5F18EAF-C721-4756-AE66-E2BBF8D978A5_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1242637743.19482.6.camel_at_localhost.localdomain" -->
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
<strong>Subject:</strong> Re: [OMPI devel] ompi-ps broken or just changed?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-18 10:08:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6064.php">Ralph Castain: "Re: [OMPI devel] ompi-ps broken or just changed?"</a>
<li><strong>Previous message:</strong> <a href="6062.php">Ashley Pittman: "Re: [OMPI devel] ompi-ps broken or just changed?"</a>
<li><strong>In reply to:</strong> <a href="6059.php">Ashley Pittman: "Re: [OMPI devel] ompi-ps broken or just changed?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Bizarre - it works perfectly for me. Is it possible you have stale  
<br>
libraries around? Or are attempting to connect to older versions of  
<br>
mpirun?
<br>
<p>You might also try cleaning out any old session dirs just to be safe -  
<br>
my best guess is that you are connecting to an older version of mpirun  
<br>
and getting an incompatible response.
<br>
<p><p>On May 18, 2009, at 3:09 AM, Ashley Pittman wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No joy I'm afraid,  now I get errors when I run it.  This is a single
</span><br>
<span class="quotelev1">&gt; node job run with the command line &quot;mpirun -n 3 ./a.out&quot;.  I've  
</span><br>
<span class="quotelev1">&gt; attached
</span><br>
<span class="quotelev1">&gt; the strace output and gzipped /tmp files from the machine.  Valgrind  
</span><br>
<span class="quotelev1">&gt; on
</span><br>
<span class="quotelev1">&gt; the opmi-ps process doesn't show anything interesting.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [alpha:29942] [[35044,0],0] ORTE_ERROR_LOG: Data unpack would read  
</span><br>
<span class="quotelev1">&gt; past
</span><br>
<span class="quotelev1">&gt; end of buffer in
</span><br>
<span class="quotelev1">&gt; file /mnt/home/debian/ashley/code/OpenMPI/ompi-trunk-tes/trunk/orte/ 
</span><br>
<span class="quotelev1">&gt; util/comm/comm.c at line 242
</span><br>
<span class="quotelev1">&gt; [alpha:29942] [[35044,0],0] ORTE_ERROR_LOG: Data unpack would read  
</span><br>
<span class="quotelev1">&gt; past
</span><br>
<span class="quotelev1">&gt; end of buffer in
</span><br>
<span class="quotelev1">&gt; file /mnt/home/debian/ashley/code/OpenMPI/ompi-trunk-tes/trunk/orte/ 
</span><br>
<span class="quotelev1">&gt; tools/orte-ps/orte-ps.c at line 818
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ashley.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sat, 2009-05-16 at 08:15 -0600, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; This is fixed now, Ashley - sorry for the problem.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On May 15, 2009, at 4:47 AM, Ashley Pittman wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Thu, 2009-05-14 at 22:49 -0600, Ralph Castain wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; It is definitely broken at the moment, Ashley. I have it pretty  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; well
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; fixed, but need/want to cleanup some corner cases that have plagued
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; us
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; for a long time.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Should have it for you sometime Friday.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ok, thanks.  I might try switching to slurm in the mean-time, I know
</span><br>
<span class="quotelev3">&gt;&gt;&gt; my
</span><br>
<span class="quotelev3">&gt;&gt;&gt; code works with that.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Can you let me know when it's fixed on or off list and I'll do an
</span><br>
<span class="quotelev3">&gt;&gt;&gt; update.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ashley,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; &lt;ompi- 
</span><br>
<span class="quotelev1">&gt; strace 
</span><br>
<span class="quotelev1">&gt; .txt&gt;&lt;ompi_tmp.tar.gz&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6064.php">Ralph Castain: "Re: [OMPI devel] ompi-ps broken or just changed?"</a>
<li><strong>Previous message:</strong> <a href="6062.php">Ashley Pittman: "Re: [OMPI devel] ompi-ps broken or just changed?"</a>
<li><strong>In reply to:</strong> <a href="6059.php">Ashley Pittman: "Re: [OMPI devel] ompi-ps broken or just changed?"</a>
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

<?
$subject_val = "Re: [OMPI devel] ompi-ps broken or just changed?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 18 10:07:47 2009" -->
<!-- isoreceived="20090518140747" -->
<!-- sent="Mon, 18 May 2009 15:08:54 +0100" -->
<!-- isosent="20090518140854" -->
<!-- name="Ashley Pittman" -->
<!-- email="ashley_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] ompi-ps broken or just changed?" -->
<!-- id="1242655734.4444.1.camel_at_localhost.localdomain" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Ashley Pittman (<em>ashley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-18 10:08:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6063.php">Ralph Castain: "Re: [OMPI devel] ompi-ps broken or just changed?"</a>
<li><strong>Previous message:</strong> <a href="6061.php">Jeff Squyres: "Re: [OMPI devel] RFC: Warn user about deprecated MPI functionalityand &quot;wrong&quot; compiler usage"</a>
<li><strong>In reply to:</strong> <a href="6059.php">Ashley Pittman: "Re: [OMPI devel] ompi-ps broken or just changed?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6064.php">Ralph Castain: "Re: [OMPI devel] ompi-ps broken or just changed?"</a>
<li><strong>Reply:</strong> <a href="6064.php">Ralph Castain: "Re: [OMPI devel] ompi-ps broken or just changed?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>This patch fixed it, num_nodes was being used initialised and hence the
<br>
client was getting a bogus value for the number of nodes.
<br>
<p>Ashley,
<br>
<p>On Mon, 2009-05-18 at 10:09 +0100, Ashley Pittman wrote:
<br>
<span class="quotelev1">&gt; No joy I'm afraid,  now I get errors when I run it.  This is a single
</span><br>
<span class="quotelev1">&gt; node job run with the command line &quot;mpirun -n 3 ./a.out&quot;.  I've attached
</span><br>
<span class="quotelev1">&gt; the strace output and gzipped /tmp files from the machine.  Valgrind on
</span><br>
<span class="quotelev1">&gt; the opmi-ps process doesn't show anything interesting.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [alpha:29942] [[35044,0],0] ORTE_ERROR_LOG: Data unpack would read past
</span><br>
<span class="quotelev1">&gt; end of buffer in
</span><br>
<span class="quotelev1">&gt; file /mnt/home/debian/ashley/code/OpenMPI/ompi-trunk-tes/trunk/orte/util/comm/comm.c at line 242
</span><br>
<span class="quotelev1">&gt; [alpha:29942] [[35044,0],0] ORTE_ERROR_LOG: Data unpack would read past
</span><br>
<span class="quotelev1">&gt; end of buffer in
</span><br>
<span class="quotelev1">&gt; file /mnt/home/debian/ashley/code/OpenMPI/ompi-trunk-tes/trunk/orte/tools/orte-ps/orte-ps.c at line 818
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ashley.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sat, 2009-05-16 at 08:15 -0600, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt; &gt; This is fixed now, Ashley - sorry for the problem.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On May 15, 2009, at 4:47 AM, Ashley Pittman wrote:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Thu, 2009-05-14 at 22:49 -0600, Ralph Castain wrote:
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; It is definitely broken at the moment, Ashley. I have it pretty well
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; fixed, but need/want to cleanup some corner cases that have plagued  
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; us
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; for a long time.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Should have it for you sometime Friday.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Ok, thanks.  I might try switching to slurm in the mean-time, I know  
</span><br>
<span class="quotelev3">&gt; &gt; &gt; my
</span><br>
<span class="quotelev3">&gt; &gt; &gt; code works with that.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Can you let me know when it's fixed on or off list and I'll do an
</span><br>
<span class="quotelev3">&gt; &gt; &gt; update.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Ashley,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p>
<br><p>
<p><hr>
<ul>
<li>text/x-patch attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-6062/ompi-ps.patch">ompi-ps.patch</a>
</ul>
<!-- attachment="ompi-ps.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6063.php">Ralph Castain: "Re: [OMPI devel] ompi-ps broken or just changed?"</a>
<li><strong>Previous message:</strong> <a href="6061.php">Jeff Squyres: "Re: [OMPI devel] RFC: Warn user about deprecated MPI functionalityand &quot;wrong&quot; compiler usage"</a>
<li><strong>In reply to:</strong> <a href="6059.php">Ashley Pittman: "Re: [OMPI devel] ompi-ps broken or just changed?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6064.php">Ralph Castain: "Re: [OMPI devel] ompi-ps broken or just changed?"</a>
<li><strong>Reply:</strong> <a href="6064.php">Ralph Castain: "Re: [OMPI devel] ompi-ps broken or just changed?"</a>
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

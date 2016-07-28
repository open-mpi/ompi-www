<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Oct  2 17:06:37 2007" -->
<!-- isoreceived="20071002210637" -->
<!-- sent="Tue, 2 Oct 2007 23:06:26 +0200" -->
<!-- isosent="20071002210626" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT devel] Uh testbake runs" -->
<!-- id="CA20F7FF-C0C8-44CA-9565-358858FBC20A_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1963.129.7.254.33.1191354836.squirrel_at_mail.cs.uh.edu" -->
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
<strong>Date:</strong> 2007-10-02 17:06:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0143.php">Mohamad Chaarawi: "Re: [MTT devel] Uh testbake runs"</a>
<li><strong>Previous message:</strong> <a href="0141.php">Mohamad Chaarawi: "Re: [MTT devel] Uh testbake runs"</a>
<li><strong>In reply to:</strong> <a href="0141.php">Mohamad Chaarawi: "Re: [MTT devel] Uh testbake runs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0143.php">Mohamad Chaarawi: "Re: [MTT devel] Uh testbake runs"</a>
<li><strong>Reply:</strong> <a href="0143.php">Mohamad Chaarawi: "Re: [MTT devel] Uh testbake runs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 2, 2007, at 9:53 PM, Mohamad Chaarawi wrote:
<br>
<p><span class="quotelev1">&gt; Yea i think those problems where when i was running from the already
</span><br>
<span class="quotelev1">&gt; installed mpich2.. but doesn't mpich pick up slurm from the path  
</span><br>
<span class="quotelev1">&gt; directly?
</span><br>
<p>Yes, but you need to link against SLURM's libpmi specifically.  In  
<br>
the template, I have stuff like this:
<br>
<p>[MPI install: MPICH2]
<br>
mpi_get = mpich2
<br>
save_stdout_on_success = 1
<br>
merge_stdout_stderr = 0
<br>
# Adjust this for your site (this is what works at Cisco).  Needed to
<br>
# launch in SLURM; adding this to LD_LIBRARY_PATH here propagates this
<br>
# all the way through the test run phases that use this MPI install,
<br>
# where the test executables will need to have this set.
<br>
prepend_path = LD_LIBRARY_PATH /opt/slurm/current/lib
<br>
<p>module = MPICH2
<br>
mpich2_compiler_name = gnu
<br>
mpich2_compiler_version = &amp;get_gcc_version()
<br>
mpich2_configure_arguments = --disable-f90 CFLAGS=-O3 --enable-fast -- 
<br>
with-device=ch3:nemesis
<br>
# These are needed to launch through SLURM; adjust as appropriate.
<br>
mpich2_additional_wrapper_ldflags = -L/opt/slurm/current/lib
<br>
mpich2_additional_wrapper_libs = -lpmi
<br>
<p>Note these last two fields ^^.  You'll need to replace the -L value  
<br>
with whatever is relevant for your cluster.
<br>
<p><p><span class="quotelev1">&gt; On Tue, October 2, 2007 1:09 pm, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I'm away from a computer right now so I don't have the specifics,  
</span><br>
<span class="quotelev2">&gt;&gt; but we
</span><br>
<span class="quotelev2">&gt;&gt; saw some testbake results from UH today of mpich2 under slurm that  
</span><br>
<span class="quotelev2">&gt;&gt; were
</span><br>
<span class="quotelev2">&gt;&gt; not run properly - it ran 16 copies of skampi instead of 1 16-node  
</span><br>
<span class="quotelev2">&gt;&gt; job, so
</span><br>
<span class="quotelev2">&gt;&gt; the output was very skewed (and completely mis-parsed).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can you check your mpich2 compile / link settings to ensure that  
</span><br>
<span class="quotelev2">&gt;&gt; you're
</span><br>
<span class="quotelev2">&gt;&gt; linking against the slurm pmi library properly?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -jms
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; mtt-devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Mohamad Chaarawi
</span><br>
<span class="quotelev1">&gt; Instructional Assistant		  <a href="http://www.cs.uh.edu/~mschaara">http://www.cs.uh.edu/~mschaara</a>
</span><br>
<span class="quotelev1">&gt; Department of Computer Science	  University of Houston
</span><br>
<span class="quotelev1">&gt; 4800 Calhoun, PGH Room 526        Houston, TX 77204, USA
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-devel mailing list
</span><br>
<span class="quotelev1">&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0143.php">Mohamad Chaarawi: "Re: [MTT devel] Uh testbake runs"</a>
<li><strong>Previous message:</strong> <a href="0141.php">Mohamad Chaarawi: "Re: [MTT devel] Uh testbake runs"</a>
<li><strong>In reply to:</strong> <a href="0141.php">Mohamad Chaarawi: "Re: [MTT devel] Uh testbake runs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0143.php">Mohamad Chaarawi: "Re: [MTT devel] Uh testbake runs"</a>
<li><strong>Reply:</strong> <a href="0143.php">Mohamad Chaarawi: "Re: [MTT devel] Uh testbake runs"</a>
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

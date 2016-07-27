<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Oct  2 22:12:39 2007" -->
<!-- isoreceived="20071003021239" -->
<!-- sent="Tue, 2 Oct 2007 21:12:34 -0500 (CDT)" -->
<!-- isosent="20071003021234" -->
<!-- name="Mohamad Chaarawi" -->
<!-- email="mschaara_at_[hidden]" -->
<!-- subject="Re: [MTT devel] Uh testbake runs" -->
<!-- id="3888.129.7.254.33.1191377554.squirrel_at_mail.cs.uh.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CA20F7FF-C0C8-44CA-9565-358858FBC20A_at_cisco.com" -->
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
<strong>From:</strong> Mohamad Chaarawi (<em>mschaara_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-02 22:12:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0144.php">Jeff Squyres: "Re: [MTT devel] Uh testbake runs"</a>
<li><strong>Previous message:</strong> <a href="0142.php">Jeff Squyres: "Re: [MTT devel] Uh testbake runs"</a>
<li><strong>In reply to:</strong> <a href="0142.php">Jeff Squyres: "Re: [MTT devel] Uh testbake runs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0144.php">Jeff Squyres: "Re: [MTT devel] Uh testbake runs"</a>
<li><strong>Reply:</strong> <a href="0144.php">Jeff Squyres: "Re: [MTT devel] Uh testbake runs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
yea im doing that, but not for the already installed libraries.. that's
<br>
the problem..
<br>
<p><p>On Tue, October 2, 2007 4:06 pm, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Oct 2, 2007, at 9:53 PM, Mohamad Chaarawi wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yea i think those problems where when i was running from the already
</span><br>
<span class="quotelev2">&gt;&gt; installed mpich2.. but doesn't mpich pick up slurm from the path
</span><br>
<span class="quotelev2">&gt;&gt; directly?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, but you need to link against SLURM's libpmi specifically.  In
</span><br>
<span class="quotelev1">&gt; the template, I have stuff like this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [MPI install: MPICH2]
</span><br>
<span class="quotelev1">&gt; mpi_get = mpich2
</span><br>
<span class="quotelev1">&gt; save_stdout_on_success = 1
</span><br>
<span class="quotelev1">&gt; merge_stdout_stderr = 0
</span><br>
<span class="quotelev1">&gt; # Adjust this for your site (this is what works at Cisco).  Needed to
</span><br>
<span class="quotelev1">&gt; # launch in SLURM; adding this to LD_LIBRARY_PATH here propagates this
</span><br>
<span class="quotelev1">&gt; # all the way through the test run phases that use this MPI install,
</span><br>
<span class="quotelev1">&gt; # where the test executables will need to have this set.
</span><br>
<span class="quotelev1">&gt; prepend_path = LD_LIBRARY_PATH /opt/slurm/current/lib
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; module = MPICH2
</span><br>
<span class="quotelev1">&gt; mpich2_compiler_name = gnu
</span><br>
<span class="quotelev1">&gt; mpich2_compiler_version = &amp;get_gcc_version()
</span><br>
<span class="quotelev1">&gt; mpich2_configure_arguments = --disable-f90 CFLAGS=-O3 --enable-fast --
</span><br>
<span class="quotelev1">&gt; with-device=ch3:nemesis
</span><br>
<span class="quotelev1">&gt; # These are needed to launch through SLURM; adjust as appropriate.
</span><br>
<span class="quotelev1">&gt; mpich2_additional_wrapper_ldflags = -L/opt/slurm/current/lib
</span><br>
<span class="quotelev1">&gt; mpich2_additional_wrapper_libs = -lpmi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note these last two fields ^^.  You'll need to replace the -L value
</span><br>
<span class="quotelev1">&gt; with whatever is relevant for your cluster.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, October 2, 2007 1:09 pm, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm away from a computer right now so I don't have the specifics,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but we
</span><br>
<span class="quotelev3">&gt;&gt;&gt; saw some testbake results from UH today of mpich2 under slurm that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; were
</span><br>
<span class="quotelev3">&gt;&gt;&gt; not run properly - it ran 16 copies of skampi instead of 1 16-node
</span><br>
<span class="quotelev3">&gt;&gt;&gt; job, so
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the output was very skewed (and completely mis-parsed).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Can you check your mpich2 compile / link settings to ensure that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you're
</span><br>
<span class="quotelev3">&gt;&gt;&gt; linking against the slurm pmi library properly?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -jms
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mtt-devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Mohamad Chaarawi
</span><br>
<span class="quotelev2">&gt;&gt; Instructional Assistant		  <a href="http://www.cs.uh.edu/~mschaara">http://www.cs.uh.edu/~mschaara</a>
</span><br>
<span class="quotelev2">&gt;&gt; Department of Computer Science	  University of Houston
</span><br>
<span class="quotelev2">&gt;&gt; 4800 Calhoun, PGH Room 526        Houston, TX 77204, USA
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; mtt-devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Mohamad Chaarawi
Instructional Assistant		  <a href="http://www.cs.uh.edu/~mschaara">http://www.cs.uh.edu/~mschaara</a>
Department of Computer Science	  University of Houston
4800 Calhoun, PGH Room 526        Houston, TX 77204, USA
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0144.php">Jeff Squyres: "Re: [MTT devel] Uh testbake runs"</a>
<li><strong>Previous message:</strong> <a href="0142.php">Jeff Squyres: "Re: [MTT devel] Uh testbake runs"</a>
<li><strong>In reply to:</strong> <a href="0142.php">Jeff Squyres: "Re: [MTT devel] Uh testbake runs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0144.php">Jeff Squyres: "Re: [MTT devel] Uh testbake runs"</a>
<li><strong>Reply:</strong> <a href="0144.php">Jeff Squyres: "Re: [MTT devel] Uh testbake runs"</a>
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

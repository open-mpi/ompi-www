<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Sep 14 18:14:19 2005" -->
<!-- isoreceived="20050914231419" -->
<!-- sent="Wed, 14 Sep 2005 16:14:09 -0700 (PDT)" -->
<!-- isosent="20050914231409" -->
<!-- name="Jonathan Day" -->
<!-- email="imipak_at_[hidden]" -->
<!-- subject="[O-MPI users] Changes required to support the Broadcom SB1" -->
<!-- id="20050914231409.64315.qmail_at_web31509.mail.mud.yahoo.com" -->
<!-- charset="iso-8859-1" -->
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
<strong>From:</strong> Jonathan Day (<em>imipak_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-09-14 18:14:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0146.php">Tim S. Woodall: "Re: [O-MPI users] attempt to override read-only MCA parameter	&quot;orte_infrastructure&quot;"</a>
<li><strong>Previous message:</strong> <a href="0144.php">Daryl W. Grunau: "Re: [O-MPI users] attempt to override read-only MCA parameter &quot;orte_infrastructure&quot;"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ok, so far so good. It looks as if the majority of the
<br>
Irix stuff will work with the Broadcom board - it's
<br>
just that the tests to activate it (in ROMIO, for
<br>
example) are too specific. It isn't just the main
<br>
configure script that needs fixing - but the changes
<br>
are more generalizing than anything.
<br>
<p>The only things that look as though they're going to
<br>
be Broadcom-specific (if OpenMPI is going to make use
<br>
of them) would be the CPU-to-CPU channel and the
<br>
phenominal number of network devices built in. (4
<br>
gigabit ethernet, 2 522 Mbit/s serial, and a
<br>
non-standard HyperTransport)
<br>
<p>The best thing might be to move the generic MIPS stuff
<br>
into one set of files, then #include include them into
<br>
specific files for, say, Irix and the Broadcoms.
<br>
<p><p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
__________________________________ 
<br>
Yahoo! Mail - PC Magazine Editors' Choice 2005 
<br>
<a href="http://mail.yahoo.com">http://mail.yahoo.com</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0146.php">Tim S. Woodall: "Re: [O-MPI users] attempt to override read-only MCA parameter	&quot;orte_infrastructure&quot;"</a>
<li><strong>Previous message:</strong> <a href="0144.php">Daryl W. Grunau: "Re: [O-MPI users] attempt to override read-only MCA parameter &quot;orte_infrastructure&quot;"</a>
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

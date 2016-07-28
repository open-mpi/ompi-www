<?
$subject_val = "Re: [OMPI devel] vt compiler warnings and errors";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 29 12:13:09 2008" -->
<!-- isoreceived="20080129171309" -->
<!-- sent="Tue, 29 Jan 2008 18:13:04 +0100" -->
<!-- isosent="20080129171304" -->
<!-- name="Matthias Jurenz" -->
<!-- email="matthias.jurenz_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] vt compiler warnings and errors" -->
<!-- id="1201626784.30802.57.camel_at_ricolap" -->
<!-- charset="utf-8" -->
<!-- inreplyto="584F0409-066C-4AC1-98B6-B1EF931A95C0_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] vt compiler warnings and errors<br>
<strong>From:</strong> Matthias Jurenz (<em>matthias.jurenz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-29 12:13:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3079.php">Jeff Squyres: "Re: [OMPI devel] vt compiler warnings and errors"</a>
<li><strong>Previous message:</strong> <a href="3077.php">Jeff Squyres: "Re: [OMPI devel] vt compiler warnings and errors"</a>
<li><strong>In reply to:</strong> <a href="3073.php">Jeff Squyres: "[OMPI devel] vt compiler warnings and errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3079.php">Jeff Squyres: "Re: [OMPI devel] vt compiler warnings and errors"</a>
<li><strong>Reply:</strong> <a href="3079.php">Jeff Squyres: "Re: [OMPI devel] vt compiler warnings and errors"</a>
<li><strong>Reply:</strong> <a href="3099.php">Tim Prins: "Re: [OMPI devel] vt compiler warnings and errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>all three VT related errors which MTT reported should be fixed now. 
<br>
<p>516:
<br>
The fix from George Bosilca at this morning should work on MacOS PPC.
<br>
Thanks!
<br>
<p>517:
<br>
The compile error occurred due to a missing header include.
<br>
Futhermore, the compiler warnings should be also fixed.
<br>
<p>518:
<br>
I have added a check whether MPI I/O is available and add the
<br>
corresponding VT's
<br>
configure option to enable/disable MPI I/O support. Therefor I used the
<br>
variable
<br>
&quot;define_mpi_io&quot; from 'ompi/mca/io/configure.m4'. Is that o.k. or should
<br>
I use another
<br>
variable ?
<br>
<p><p>Matthias
<br>
<p><p>On Di, 2008-01-29 at 09:19 -0500, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; I got a bunch of compiler warnings and errors with VT on the PGI  
</span><br>
<span class="quotelev1">&gt; compiler last night -- my mail client won't paste it in nicely.  :-(
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; See these MTT reports for details:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - On Absoft systems:
</span><br>
<span class="quotelev1">&gt;    <a href="http://www.open-mpi.org/mtt/index.php?do_redir=516">http://www.open-mpi.org/mtt/index.php?do_redir=516</a>
</span><br>
<span class="quotelev1">&gt; - On Cisco systems:
</span><br>
<span class="quotelev1">&gt;    With PGI compilers:
</span><br>
<span class="quotelev1">&gt;        <a href="http://www.open-mpi.org/mtt/index.php?do_redir=517">http://www.open-mpi.org/mtt/index.php?do_redir=517</a>
</span><br>
<span class="quotelev1">&gt;    With GNU compilers:
</span><br>
<span class="quotelev1">&gt;        <a href="http://www.open-mpi.org/mtt/index.php?do_redir=518">http://www.open-mpi.org/mtt/index.php?do_redir=518</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The output may be a bit hard to read -- for MTT builds, we separate  
</span><br>
<span class="quotelev1">&gt; the stdout and stderr into 2 streams.  So you kinda have to merge them  
</span><br>
<span class="quotelev1">&gt; in your head; sorry...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><pre>
--
Matthias Jurenz,
Center for Information Services and 
High Performance Computing (ZIH), TU Dresden, 
Willersbau A106, Zellescher Weg 12, 01062 Dresden
phone +49-351-463-31945, fax +49-351-463-37773
</pre>
<p>
<p>
<br><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-3078/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-3078/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3079.php">Jeff Squyres: "Re: [OMPI devel] vt compiler warnings and errors"</a>
<li><strong>Previous message:</strong> <a href="3077.php">Jeff Squyres: "Re: [OMPI devel] vt compiler warnings and errors"</a>
<li><strong>In reply to:</strong> <a href="3073.php">Jeff Squyres: "[OMPI devel] vt compiler warnings and errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3079.php">Jeff Squyres: "Re: [OMPI devel] vt compiler warnings and errors"</a>
<li><strong>Reply:</strong> <a href="3079.php">Jeff Squyres: "Re: [OMPI devel] vt compiler warnings and errors"</a>
<li><strong>Reply:</strong> <a href="3099.php">Tim Prins: "Re: [OMPI devel] vt compiler warnings and errors"</a>
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

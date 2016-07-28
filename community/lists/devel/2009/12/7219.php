<?
$subject_val = "[OMPI devel] Changing BTL configs at runtime";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 11 04:50:26 2009" -->
<!-- isoreceived="20091211095026" -->
<!-- sent="Fri, 11 Dec 2009 10:50:20 +0100" -->
<!-- isosent="20091211095020" -->
<!-- name="Christoph Konersmann" -->
<!-- email="c_k_at_[hidden]" -->
<!-- subject="[OMPI devel] Changing BTL configs at runtime" -->
<!-- id="4B2215DC.4000608_at_upb.de" -->
<!-- charset="ISO-8859-15" -->
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
<strong>Subject:</strong> [OMPI devel] Changing BTL configs at runtime<br>
<strong>From:</strong> Christoph Konersmann (<em>c_k_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-11 04:50:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7220.php">Ralph Castain: "Re: [OMPI devel] Automatic CMRs for ompi-v1.4 / v1.5"</a>
<li><strong>Previous message:</strong> <a href="7218.php">George Bosilca: "Re: [OMPI devel] failure with zero-length Reduce() and both sbuf=rbuf=NULL"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello list,
<br>
<p>I'm currently trying to change some BTL settings at runtime. More 
<br>
precisely I want to change the BTL's exclusivity with an external tool 
<br>
while an Open MPI Process is running.
<br>
<p>The main purpose is to switch the BTL's used for the upcoming send 
<br>
messages. For example switch from openib to tcp.
<br>
<p>My idea was the following: As BTL's with a lower exclusivity are 
<br>
currently excluded from the senders list, I changed mca_bml_r2_add_procs 
<br>
to leave them in. And I also added a function getting the next BTL with 
<br>
the same highest exclusivity. I then started to programming an ORTE tool 
<br>
which connects with opal_dss to the hnp. But now I realize that with 
<br>
orte_comm.c I have no access to the BML, do I? The layered architecture 
<br>
of Open MPI somehow prevents this as the ORTE library should not depend 
<br>
on the OMPI library. Is there another way of getting runtime access to 
<br>
the BML of a running OMPI process?
<br>
<p>Base source code is the current trunk version of Subversion.
<br>
<p>Any help or other suggestions would be welcome.
<br>
Thanks, Christoph
<br>
<p><pre>
-- 
Paderborn Center for Parallel Computing - PC2
University of Paderborn - Germany
<a href="http://www.pc2.de">http://www.pc2.de</a>
Christoph Konersmann &lt;c_k_at_[hidden]&gt;
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7220.php">Ralph Castain: "Re: [OMPI devel] Automatic CMRs for ompi-v1.4 / v1.5"</a>
<li><strong>Previous message:</strong> <a href="7218.php">George Bosilca: "Re: [OMPI devel] failure with zero-length Reduce() and both sbuf=rbuf=NULL"</a>
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

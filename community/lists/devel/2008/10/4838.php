<?
$subject_val = "[OMPI devel] Communications and it cache";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 31 12:51:11 2008" -->
<!-- isoreceived="20081031165111" -->
<!-- sent="Fri, 31 Oct 2008 17:54:03 +0100" -->
<!-- isosent="20081031165403" -->
<!-- name="Leonardo Fialho" -->
<!-- email="lfialho_at_[hidden]" -->
<!-- subject="[OMPI devel] Communications and it cache" -->
<!-- id="490B382B.9000709_at_aomail.uab.es" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] Communications and it cache<br>
<strong>From:</strong> Leonardo Fialho (<em>lfialho_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-31 12:54:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4839.php">Ralph Castain: "[OMPI devel] Commit r19868"</a>
<li><strong>Previous message:</strong> <a href="4837.php">Ralph Castain: "[OMPI devel] Dec ORTE design meeting"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi All,
<br>
<p>Actually I had success recovering a faulty process from a previous 
<br>
checkpoint. There are three situations which I can handle:
<br>
<p>1) application process fault
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Caused by: error during memory allocation? processor errors?
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Restart: in this case I recover the process on the same orted
<br>
<p>2) orted process fault
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Caused by: error during memory allocation?  processor errors?
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Restart: in this case I recover the processes managed by the faulty 
<br>
orted on an available node (if it exists) or in other orted.
<br>
&nbsp;&nbsp;
<br>
3) node fault (or isolated node)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Caused by: there are a lot of situations: network, energy, crash...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Restart: in this case I recover the processes managed by the faulty 
<br>
orted on an available node (if it exists) or in other orted.
<br>
<p>All the processes are launched and restarted correctly, all the 
<br>
environment variables used by the ESS are configured automatically by 
<br>
the restart routine. However, the communications are a problem for me 
<br>
because the BML/BTL keeps the connection to the faulty process cached. I 
<br>
think that Josh does not have this problem because he restart all the 
<br>
process.
<br>
<p>I saw that a possible solution is to perform a close/open operation on 
<br>
BML, but I do not want to do it in all processes, neither on the process 
<br>
which has a communication with my faulty process cached. My idea is: 
<br>
when the following error occur,
<br>
<p>[btl_tcp_endpoint.c:625:mca_btl_tcp_endpoint_complete_connect] connect() 
<br>
failed: Connection refused (111)
<br>
<p>the connection to the faulty process is removed from the cache and a new 
<br>
request for the NS is performed. The process location and state is 
<br>
maintained up to date on the HNP by my FT routines. What do you think 
<br>
about this?
<br>
<p>Thanks,
<br>
<p><pre>
-- 
Leonardo Fialho
Computer Architecture and Operating Systems Department - CAOS
Universidad Autonoma de Barcelona - UAB
ETSE, Edifcio Q, QC/3088
<a href="http://www.caos.uab.es">http://www.caos.uab.es</a>
Phone: +34-93-581-2888
Fax: +34-93-581-2478
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4839.php">Ralph Castain: "[OMPI devel] Commit r19868"</a>
<li><strong>Previous message:</strong> <a href="4837.php">Ralph Castain: "[OMPI devel] Dec ORTE design meeting"</a>
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

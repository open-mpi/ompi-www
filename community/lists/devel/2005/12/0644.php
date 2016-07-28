<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Dec 30 04:50:16 2005" -->
<!-- isoreceived="20051230095016" -->
<!-- sent="Fri, 30 Dec 2005 10:15:44 +0100" -->
<!-- isosent="20051230091544" -->
<!-- name="Graziano Giuliani" -->
<!-- email="giuliani_at_[hidden]" -->
<!-- subject="Re:  sm btl/signal 11 problem on Linux" -->
<!-- id="200512301015.55166.giuliani_at_lamma.rete.toscana.it" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="A02E994F-F536-4DE5-BE65-9B4BE33F09B8_at_open-mpi.org" -->
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
<strong>From:</strong> Graziano Giuliani (<em>giuliani_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-12-30 04:15:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2006/01/0645.php">Jeff Squyres: "Re:  debugging methods"</a>
<li><strong>Previous message:</strong> <a href="0643.php">Brian Barrett: "Re:  sm btl/signal 11 problem on Linux"</a>
<li><strong>In reply to:</strong> <a href="0643.php">Brian Barrett: "Re:  sm btl/signal 11 problem on Linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2006/01/0646.php">Jeff Squyres: "Re:  sm btl/signal 11 problem on Linux"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2006/01/0646.php">Jeff Squyres: "Re:  sm btl/signal 11 problem on Linux"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ok Brian,
<br>
<p>for the build part, attached is my config.log. 
<br>
About stacktrace, I have with my compile options from gdb:
<br>
<p>#0  0xb7d105b9 in orte_pls_rsh_launch ()
<br>
&nbsp;&nbsp;&nbsp;from /home/cluster/openmpi/lib/openmpi/mca_pls_rsh.so
<br>
<p>and recompiling with -g 
<br>
<p>#0  0xb7ca2599 in orte_pls_rsh_launch (jobid=1) at pls_rsh_module.c:716
<br>
716                         if (mca_pls_rsh_component.debug) {
<br>
<p>which means we have a memory corruption somewhere else...
<br>
Investigating from outside on what may cause the problem, I have found that I 
<br>
can make the job run also changing the hostname in my hostfile.
<br>
<p>-) No localhost in hostfile -&gt; run
<br>
-) &quot;wowbagger&quot; or &quot;localhost&quot; in hostfile -&gt; run
<br>
-) FQDN wowbagger.cluster in hostfile -&gt; SIGSEGV
<br>
<p>I have a private network (10.2.1.0) with cluster master (local node) as DNS 
<br>
with bind v9.
<br>
<p># hostname
<br>
wowbagger
<br>
# host wowbagger
<br>
wowbagger.cluster has address 10.2.1.100
<br>
# mpirun --hostfile wrf_openmpi.mac -np 10 -bynode wrf.exe
<br>
mpirun noticed that job rank 0 with PID 0 on node &quot;wowbagger.cluster&quot; exited 
<br>
on signal 11.
<br>
[wowbagger:20400] ERROR: A daemon on node wowbagger.cluster failed to start as 
<br>
expected.
<br>
[wowbagger:20400] ERROR: There may be more information available from
<br>
[wowbagger:20400] ERROR: the remote shell (see above).
<br>
[wowbagger:20400] The daemon received a signal 11 (with core).
<br>
mpirun: killing job...
<br>
9 processes killed (possibly by Open MPI)
<br>
<p>Changing wowbagger.cluster with simply wowbagger do the trick. Something in 
<br>
host name resolution?
<br>
<p>Attached is my hostfile.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Graziano.
<br>
<p>P.S.: Sorry for the delay, but yesterday here in Florence we had heavy 
<br>
snowfall ! 
<br>
<p><p><pre>
-- 
&#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;\ | /
&#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;(@ @)
&#160;-------------------------o00-(_)-00o -----------------------------
&#160;LaMMA - Laboratorio per la Meteorologia e la Modellistica Ambientale
&#160; &#160; &#160; &#160; &#160;Laboratory for Meteorology and Environmental Modelling
&#160;Via Madonna del Piano, 50019 Sesto Fiorentino (FI)
&#160; &#160; &#160;tel: + 39 055 4483049
&#160; &#160; &#160;fax: + 39 055 444083
&#160; &#160; &#160;web: www.lamma.rete.toscana.it
&#160; e-mail: giuliani_at_[hidden]


</pre>
<p>
<p>
<br><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-0644/config.log">config.log</a>
</ul>
<!-- attachment="config.log" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-0644/wrf_openmpi.mac">wrf_openmpi.mac</a>
</ul>
<!-- attachment="wrf_openmpi.mac" -->
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-0644/03-part">stored</a>
</ul>
<!-- attachment="03-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2006/01/0645.php">Jeff Squyres: "Re:  debugging methods"</a>
<li><strong>Previous message:</strong> <a href="0643.php">Brian Barrett: "Re:  sm btl/signal 11 problem on Linux"</a>
<li><strong>In reply to:</strong> <a href="0643.php">Brian Barrett: "Re:  sm btl/signal 11 problem on Linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2006/01/0646.php">Jeff Squyres: "Re:  sm btl/signal 11 problem on Linux"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2006/01/0646.php">Jeff Squyres: "Re:  sm btl/signal 11 problem on Linux"</a>
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

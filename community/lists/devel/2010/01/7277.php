<?
$subject_val = "[OMPI devel] Howto pause BTL's sending at runtime";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan  5 08:56:43 2010" -->
<!-- isoreceived="20100105135643" -->
<!-- sent="Tue, 05 Jan 2010 14:56:36 +0100" -->
<!-- isosent="20100105135636" -->
<!-- name="Christoph Konersmann" -->
<!-- email="c_k_at_[hidden]" -->
<!-- subject="[OMPI devel] Howto pause BTL's sending at runtime" -->
<!-- id="4B434514.3070605_at_upb.de" -->
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
<strong>Subject:</strong> [OMPI devel] Howto pause BTL's sending at runtime<br>
<strong>From:</strong> Christoph Konersmann (<em>c_k_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-05 08:56:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7278.php">Eugene Loh: "Re: [OMPI devel] [Open MPI] #2043: sm BTL hang with GCC 4.4.x"</a>
<li><strong>Previous message:</strong> <a href="7276.php">Jeff Squyres: "Re: [OMPI devel] [Open MPI] #2043: sm BTL hang with GCC 4.4.x"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7293.php">Christoph Konersmann: "Re: [OMPI devel] Howto pause BTL's sending at runtime"</a>
<li><strong>Maybe reply:</strong> <a href="7293.php">Christoph Konersmann: "Re: [OMPI devel] Howto pause BTL's sending at runtime"</a>
<li><strong>Maybe reply:</strong> <a href="7295.php">Christoph Konersmann: "Re: [OMPI devel] Howto pause BTL's sending at runtime"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>I'm trying to implement a method to pause all BTL's sending packets to 
<br>
their destinations.
<br>
<p>Currently I added a state variable to orte_process_info which will be 
<br>
changed with an external program through process_commands() in 
<br>
orte/orted/orted_comm.c (I hope it's processed globaly not locally). 
<br>
While this state is changed to something defined as PAUSE, I want the 
<br>
send_methods in PML-Layer to be halted omitting any network traffic. By 
<br>
now it's not working, cause the PML-Layer does not see the state change.
<br>
<p>Another way would be to use a libevent thread on the bml/pml-level. I've 
<br>
read that this library is already supported/implemented, or am I wrong? 
<br>
How would I use libevent in this context? Does somebody have an example 
<br>
or hint? Or should I use the fault tolerance framework for this purpose?
<br>
<p>Any help would be appreciated. thanks
<br>
<p><p><pre>
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
<li><strong>Next message:</strong> <a href="7278.php">Eugene Loh: "Re: [OMPI devel] [Open MPI] #2043: sm BTL hang with GCC 4.4.x"</a>
<li><strong>Previous message:</strong> <a href="7276.php">Jeff Squyres: "Re: [OMPI devel] [Open MPI] #2043: sm BTL hang with GCC 4.4.x"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7293.php">Christoph Konersmann: "Re: [OMPI devel] Howto pause BTL's sending at runtime"</a>
<li><strong>Maybe reply:</strong> <a href="7293.php">Christoph Konersmann: "Re: [OMPI devel] Howto pause BTL's sending at runtime"</a>
<li><strong>Maybe reply:</strong> <a href="7295.php">Christoph Konersmann: "Re: [OMPI devel] Howto pause BTL's sending at runtime"</a>
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

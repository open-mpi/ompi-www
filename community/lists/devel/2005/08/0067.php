<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Aug  2 15:22:15 2005" -->
<!-- isoreceived="20050802202215" -->
<!-- sent="Tue, 02 Aug 2005 14:22:12 -0600" -->
<!-- isosent="20050802202212" -->
<!-- name="Ralph H. Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="New simplified registry API's" -->
<!-- id="6.2.3.4.2.20050802141437.01cbbeb0_at_pobox1663.lanl.gov" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Ralph H. Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-08-02 15:22:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0068.php">Jeffrey Squyres: "New MCA param API"</a>
<li><strong>Previous message:</strong> <a href="0066.php">Jeff Squyres: "processor affinity"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yo all
<br>
<p>Per last week's discussions, I have created a set of new simplified 
<br>
API's for the registry. These include:
<br>
<p>1. orte_gpr.put_1 and orte_gpr.put_N: these allow you to put data on 
<br>
the registry without having to define your own value structures. They 
<br>
take a segment name, a NULL-terminated array of string tokens that 
<br>
define the registry container (can just be NULL, which will put the 
<br>
specified values in every container on that segment), a string key, a 
<br>
data type, and a value_union containing the data iself. In the case 
<br>
of put_N, these last three are arrays of those items so you can put 
<br>
multiple data values in a single container.
<br>
<p>2. orte_gpr.subscribe_1 and orte_gpr.subscribe_N: similar 
<br>
functionality as the above, only for defining subscriptions. You can 
<br>
also provide the name of a trigger to which you want to attach, and 
<br>
the name to be used for the subscription (so that other processes can 
<br>
attach to it).
<br>
<p>3. orte_gpr.define_trigger: a way to quickly define a trigger that 
<br>
can subsequently be used by subscription commands.
<br>
<p>You can find examples of how to use these commands in 
<br>
trunk/test/mca/gpr - look at the gpr_quick_put.c and 
<br>
gpr_quick_triggers.c files. In addition, I will be convering the 
<br>
trunk/orte/mca/rmgr/rmgr_base_stage_gate.c functions to use these new 
<br>
API's as another example for people to use - hope to have that 
<br>
checked in later tonight. I'll be adding documentation to the gpr.h 
<br>
file to explain the API's as well, but that might take another day or 
<br>
so to complete.
<br>
<p>These have been tested now, so feel free to use them.
<br>
Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0068.php">Jeffrey Squyres: "New MCA param API"</a>
<li><strong>Previous message:</strong> <a href="0066.php">Jeff Squyres: "processor affinity"</a>
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

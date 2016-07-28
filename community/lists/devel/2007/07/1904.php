<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jul 16 11:21:38 2007" -->
<!-- isoreceived="20070716152138" -->
<!-- sent="Mon, 16 Jul 2007 09:21:05 -0600" -->
<!-- isosent="20070716152105" -->
<!-- name="Brian Barrett" -->
<!-- email="bbarrett_at_[hidden]" -->
<!-- subject="[OMPI devel] RML/OOB change heads up" -->
<!-- id="369989A6-1958-4FC7-83E0-357740955A58_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Brian Barrett (<em>bbarrett_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-16 11:21:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1905.php">Jeff Squyres: "[OMPI devel] MTT OMPI results"</a>
<li><strong>Previous message:</strong> <a href="1903.php">Ralph H Castain: "Re: [OMPI devel] Orte update"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hey all -
<br>
<p>Thought I would give you guys a heads up on some code that will be  
<br>
coming into the trunk in the not too distant future (hopefully  
<br>
tomorrow?).  The changes revolve around the RML/OOB interface and  
<br>
include:
<br>
<p>&nbsp;&nbsp;&nbsp;* General TCP cleanup for OPAL / ORTE
<br>
&nbsp;&nbsp;&nbsp;* Simplifying the OOB by moving much of the logic into the RML
<br>
&nbsp;&nbsp;&nbsp;* Allowing the OOB RML component to do routing of messages
<br>
&nbsp;&nbsp;&nbsp;* Adding a component framework for handling routing tables
<br>
&nbsp;&nbsp;&nbsp;* Moving the xcast functionality from the OOB base to its own  
<br>
framework
<br>
<p>The IPv6 code did some things that I (and I know George) didn't  
<br>
like.  Some functions had their interface change depending on whether  
<br>
IPv6 support was enabled (taking either an sockaddr_in or  
<br>
sockaddr_in6 instead of just a sockaddr) and we were inconsistent  
<br>
about storage sizes.  I've added a bunch of compatibility code to  
<br>
opal_config_bottom.h so that we can always have sockaddr_storage and  
<br>
some of the required IPv6 defines, which drastically simplified the  
<br>
IPv6 code in the TCP OOB.
<br>
<p>Previously, the OOB and RML component interfaces were essentially  
<br>
equivalent.  This isn't surprising, as the RML was added at the last  
<br>
minute as a wrapper around the OOB as a forward looking way of  
<br>
solving multi-cell architectures.  The interface into the OOB was  
<br>
also strange, requiring the upper layer (the RML) to call base  
<br>
functions that did a bit of work, then called the component.  With  
<br>
this change, all the base code has been moved into the RML, and the  
<br>
OOB interface has been simplified by removing all the blocking and  
<br>
dss buffer communication.  The RML now handles the implementation of  
<br>
blocking sends and dss buffer communication.  This not only greatly  
<br>
simplifies writing an OOB component, but removes the base code in the  
<br>
oob, which was causing problems as it implied that there was one and  
<br>
only one oob component active at a time, which some people are  
<br>
apparently trying to break (by having multiple OOB components alive).
<br>
<p>The OOB RML can now also route messages, using a new framework (the  
<br>
routed framework) for determining how a message should be routed.   
<br>
Currently, only direct routing is supported, although that will  
<br>
change in the near future.  The not-so-long term goal is to allow MPI  
<br>
processes to talk to each other and to the HNP through their local  
<br>
daemon, rather than directly.  This will drastically reduce the  
<br>
number of sockets open in the system, which can only help with the  
<br>
speed thing.
<br>
<p>Finally, we moved the xcast functionality out of the OOB base and  
<br>
into its own framework.  It really didn't make sense to have it in  
<br>
the OOB base, as it didn't do anything OOB specific and just utilized  
<br>
the RML to move data around.  By moving it to its own framework, we  
<br>
can more easily experiment with new xcast protocols (using the  
<br>
component infrastructure, rather than the games Ralph currently has  
<br>
to play using MCA parameters and if statements).  It also makes a  
<br>
clearer distinction as to which components are responsible for which  
<br>
functionality.
<br>
<p>Anyway, that's where we're at.  You can take a look at the code in  
<br>
the temporary branch bwb-oob-rml-cleanup, although it currently does  
<br>
not work for singletons due to some merge conflicts from last night.   
<br>
This will be resolved before the merge back into the trunk, obviously.
<br>
<p><p>Brian
<br>
<p><pre>
-- 
   Brian W. Barrett
   Networking Team, CCS-1
   Los Alamos National Laboratory
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1905.php">Jeff Squyres: "[OMPI devel] MTT OMPI results"</a>
<li><strong>Previous message:</strong> <a href="1903.php">Ralph H Castain: "Re: [OMPI devel] Orte update"</a>
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

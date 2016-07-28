<?
$subject_val = "[OMPI devel] Device failover in dr pml";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 15 08:47:41 2009" -->
<!-- isoreceived="20090415124741" -->
<!-- sent="Wed, 15 Apr 2009 14:47:30 +0200" -->
<!-- isosent="20090415124730" -->
<!-- name="Mouhamed Gueye" -->
<!-- email="mouhamed.gueye_at_[hidden]" -->
<!-- subject="[OMPI devel] Device failover in dr pml" -->
<!-- id="49E5D762.2020408_at_bull.net" -->
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
<strong>Subject:</strong> [OMPI devel] Device failover in dr pml<br>
<strong>From:</strong> Mouhamed Gueye (<em>mouhamed.gueye_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-15 08:47:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5826.php">Ralph Castain: "Re: [OMPI devel] Device failover in dr pml"</a>
<li><strong>Previous message:</strong> <a href="5824.php">Jeff Squyres: "[OMPI devel] NEWS bullets for 1.3.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5826.php">Ralph Castain: "Re: [OMPI devel] Device failover in dr pml"</a>
<li><strong>Reply:</strong> <a href="5826.php">Ralph Castain: "Re: [OMPI devel] Device failover in dr pml"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>We are currently working on the dr pml component and specifically on 
<br>
device failover. The failover mecanism seems to work fine on different 
<br>
components, but if we want to do it on different modules of the same 
<br>
component - say 2 Infiniband rails - the code seems to be broken.
<br>
<p>Actually, when the first openib module fails, the progress function of 
<br>
the openib component is deregistered and progress is no longer made on 
<br>
any openib module. We managed to circumvent this by keeping the progress 
<br>
function as long as an openib module might be using it and it seems to 
<br>
work fine.
<br>
<p>So I have a few questions :
<br>
<p>1. Is there already work in progress to support multi-module failover on 
<br>
the dr pml ?
<br>
2. Do you think this is the correct way to handle multi-module failover ?
<br>
<p>Also, the fact that the &quot;dr&quot; component includes many things like 
<br>
checksuming bothers us a bit (we'd like to lower performance overhead as 
<br>
far as possible when including device failover). So,
<br>
<p>3. Do you plan to fork this component to a &quot;df (device failover) only&quot; 
<br>
one ? (we would like to, but maybe this is not the right way to go)
<br>
<p>That's all for now,
<br>
Mouhamed
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5826.php">Ralph Castain: "Re: [OMPI devel] Device failover in dr pml"</a>
<li><strong>Previous message:</strong> <a href="5824.php">Jeff Squyres: "[OMPI devel] NEWS bullets for 1.3.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5826.php">Ralph Castain: "Re: [OMPI devel] Device failover in dr pml"</a>
<li><strong>Reply:</strong> <a href="5826.php">Ralph Castain: "Re: [OMPI devel] Device failover in dr pml"</a>
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

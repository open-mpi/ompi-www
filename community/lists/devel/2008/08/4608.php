<?
$subject_val = "[OMPI devel] Platform files";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 27 08:59:54 2008" -->
<!-- isoreceived="20080827125954" -->
<!-- sent="Wed, 27 Aug 2008 06:59:47 -0600" -->
<!-- isosent="20080827125947" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] Platform files" -->
<!-- id="0E4F9B4D-56C5-4047-B0BE-E103F36E3D62_at_lanl.gov" -->
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
<strong>Subject:</strong> [OMPI devel] Platform files<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-27 08:59:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4609.php">Ralph Castain: "[OMPI devel] IOF and scalability"</a>
<li><strong>Previous message:</strong> <a href="4607.php">Patrick Farrell: "[OMPI devel] Possible buffer overrun bug in opal_free_list_grow, called by MPI::Init"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
For those of you who do not use and/or are not interested in the  
<br>
platform file configuration system, please ignore this message.
<br>
<p>Jeff and I have made an extension to the platform file support that  
<br>
might prove of interest to those of you who utilize platform files. It  
<br>
seemed to me that the configuration for a platform frequently also  
<br>
implied a specific default mca param configuration as well. However,  
<br>
the prior implementation only allowed you to specify a configuration  
<br>
file for your platform - you had to then manually edit the default mca  
<br>
param file to get the behavior you wanted.
<br>
<p>Our extension allows the platform file system to pickup and install an  
<br>
associated default mca param file. The rules for finding the file are  
<br>
pretty simple. Assuming your platform file is called &quot;foo&quot;, we look in  
<br>
the same directory as foo for the following file (in order of  
<br>
precedence):
<br>
<p>1. foo.conf
<br>
<p>2. openmpi-mca-param.conf
<br>
<p>The first of these to be detected is declared your platform default  
<br>
mca param file and is used in place of the blank openmpi-mca- 
<br>
param.conf file we normally supply. If we don't find either of those,  
<br>
we will still install the old blank one.
<br>
<p>Note one difference in behavior. A platform default mca param file  
<br>
will overwrite any pre-existing default mca param file when you do a  
<br>
&quot;make install&quot;. This was done to allow for updates to the platform  
<br>
file to be installed, and was done under the assumption that the  
<br>
platform file is the &quot;gold standard&quot;. If no platform mca param file is  
<br>
found, the blank default file will -not- overwrite any pre-existing  
<br>
file, thus continuing the current behavior in that scenario.
<br>
<p>Any comments or suggestions are welcomed.
<br>
Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4609.php">Ralph Castain: "[OMPI devel] IOF and scalability"</a>
<li><strong>Previous message:</strong> <a href="4607.php">Patrick Farrell: "[OMPI devel] Possible buffer overrun bug in opal_free_list_grow, called by MPI::Init"</a>
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

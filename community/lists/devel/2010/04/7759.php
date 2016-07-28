<?
$subject_val = "[OMPI devel] &#180;&#240;&#184;&#180;: [OMPI devel] Migrate the OpenMPI to VxWorks";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 16 02:11:59 2010" -->
<!-- isoreceived="20100416061159" -->
<!-- sent="Fri, 16 Apr 2010 14:11:52 +0800" -->
<!-- isosent="20100416061152" -->
<!-- name="&#213;&#197;&#190;&#167;" -->
<!-- email="iam.chilli_at_[hidden]" -->
<!-- subject="[OMPI devel] &amp;#180;&amp;#240;&amp;#184;&amp;#180;: [OMPI devel] Migrate the OpenMPI to VxWorks" -->
<!-- id="4bc7ffa9.5444f10a.7a82.ffff9df2_at_mx.google.com" -->
<!-- charset="gb2312" -->
<!-- inreplyto="DC91CC39-6003-45B7-B8F9-65EA3F184AE4_at_open-mpi.org" -->
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
<strong>Subject:</strong> [OMPI devel] &#180;&#240;&#184;&#180;: [OMPI devel] Migrate the OpenMPI to VxWorks<br>
<strong>From:</strong> &#213;&#197;&#190;&#167; (<em>iam.chilli_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-16 02:11:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7760.php">Terry Dontje: "Re: [OMPI devel] RFC: Deprecate rankfile?"</a>
<li><strong>Previous message:</strong> <a href="7758.php">Ralf Wildenhues: "Re: [OMPI devel] Migrate the OpenMPI to VxWorks"</a>
<li><strong>In reply to:</strong> <a href="7757.php">Ralph Castain: "Re: [OMPI devel] Migrate the OpenMPI to VxWorks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7764.php">Ralph Castain: "Re: [OMPI devel] &#231;&#173;&#148;&#229;&#164;&#141;:  Migrate the OpenMPI to VxWorks"</a>
<li><strong>Reply:</strong> <a href="7764.php">Ralph Castain: "Re: [OMPI devel] &#231;&#173;&#148;&#229;&#164;&#141;:  Migrate the OpenMPI to VxWorks"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Castain
<br>
<p>&nbsp;
<br>
<p>Does &#161;&#176;install the autotools under VxWorks&#161;&#177; mean install the autotools on
<br>
the host or on the target ? 
<br>
<p>&nbsp;
<br>
<p>Jing Zhang  
<br>
<p>&#183;&#162;&#188;&#254;&#200;&#203;: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]] &#180;&#250;&#177;&#237;
<br>
Ralph Castain
<br>
&#183;&#162;&#203;&#205;&#202;&#177;&#188;&#228;: 2010&#196;&#234;4&#212;&#194;16&#200;&#213; 11:36
<br>
&#202;&#213;&#188;&#254;&#200;&#203;: Open MPI Developers
<br>
&#214;&#247;&#204;&#226;: Re: [OMPI devel] Migrate the OpenMPI to VxWorks
<br>
<p>&nbsp;
<br>
<p>I have not personally tried, but I am pretty sure that you can install the
<br>
autotools under VxWorks - have you tried to download the latest autotool
<br>
tarballs and build them?
<br>
<p>&nbsp;
<br>
<p>On Apr 15, 2010, at 9:30 PM, &#213;&#197;&#190;&#167; wrote:
<br>
<p><p><p><p><p>Hello everyone ,
<br>
<p>&nbsp;
<br>
<p>For the purpose to migrate the OpenMPI to VxWorks ,I have set up a VxWorks
<br>
development environment with WorkBench 3.0. It is really a good news that
<br>
the WorkBench supports gnu building tools, bash and some frequently used
<br>
command like sed ,awd and so on but not the Autotools (Autoconf/Automake)
<br>
.Once I wonder the configure script file generated under the linux may work
<br>
well under the workbench shell environment . But it is a frustrate to find
<br>
when I launch the configure ,it just hang without any prompt .I look into
<br>
the problem and found maybe the version of the bash in the VxWorks is too
<br>
low to parse the configure file .
<br>
<p>Then I come across the cmake which is used to as building tools under
<br>
windows for the openmpi. Because of the feature of &#161;&#176;cross-platform&#161;&#177; ,I
<br>
think it is possible to use cmake to migrate .Also I found boostcmake
<br>
project which supports the vxworks gnu compile tools using cmake .
<br>
<p>But considering my poor knowledge about the building system
<br>
(Autotools,cmake,etc),I need some guide and advice to review what I plan to
<br>
do is a possible .
<br>
<p>&nbsp;
<br>
<p>Thank you in advance !
<br>
<p>Jing Zhang  
<br>
<p>_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
<p>&nbsp;
<br>
<p><p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-7759/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7760.php">Terry Dontje: "Re: [OMPI devel] RFC: Deprecate rankfile?"</a>
<li><strong>Previous message:</strong> <a href="7758.php">Ralf Wildenhues: "Re: [OMPI devel] Migrate the OpenMPI to VxWorks"</a>
<li><strong>In reply to:</strong> <a href="7757.php">Ralph Castain: "Re: [OMPI devel] Migrate the OpenMPI to VxWorks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7764.php">Ralph Castain: "Re: [OMPI devel] &#231;&#173;&#148;&#229;&#164;&#141;:  Migrate the OpenMPI to VxWorks"</a>
<li><strong>Reply:</strong> <a href="7764.php">Ralph Castain: "Re: [OMPI devel] &#231;&#173;&#148;&#229;&#164;&#141;:  Migrate the OpenMPI to VxWorks"</a>
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

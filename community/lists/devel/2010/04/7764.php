<?
$subject_val = "Re: [OMPI devel] &#231;&#173;&#148;&#229;&#164;&#141;:  Migrate the OpenMPI to VxWorks";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 16 08:36:03 2010" -->
<!-- isoreceived="20100416123603" -->
<!-- sent="Fri, 16 Apr 2010 06:35:54 -0600" -->
<!-- isosent="20100416123554" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] &amp;#231;&amp;#173;&amp;#148;&amp;#229;&amp;#164;&amp;#141;:  Migrate the OpenMPI to VxWorks" -->
<!-- id="5DB156FE-1CD3-44D4-BAE5-9962E0EFA6A1_at_open-mpi.org" -->
<!-- charset="GB2312" -->
<!-- inreplyto="4bc7ffa9.5444f10a.7a82.ffff9df2_at_mx.google.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] &#231;&#173;&#148;&#229;&#164;&#141;:  Migrate the OpenMPI to VxWorks<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-16 08:35:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7765.php">Terry Dontje: "Re: [OMPI devel] RFC: Deprecate rankfile?"</a>
<li><strong>Previous message:</strong> <a href="7763.php">Ralph Castain: "Re: [OMPI devel] RFC: Deprecate rankfile?"</a>
<li><strong>In reply to:</strong> <a href="7759.php">&#213;&#197;&#190;&#167;: "[OMPI devel] &#180;&#240;&#184;&#180;: [OMPI devel] Migrate the OpenMPI to VxWorks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7766.php">张晶: "[OMPI devel] &#180;&#240;&#184;&#180;: [OMPI devel] &#180;&#240;&#184;&#180;:  Migrate the OpenMPI to VxWorks"</a>
<li><strong>Reply:</strong> <a href="7766.php">张晶: "[OMPI devel] &#180;&#240;&#184;&#180;: [OMPI devel] &#180;&#240;&#184;&#180;:  Migrate the OpenMPI to VxWorks"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You would install it on the host where you are doing development. Only the eventual OMPI libraries get moved to the target.
<br>
<p>On Apr 16, 2010, at 12:11 AM, &#213;&#197;&#190;&#167; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Castain
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Does &#161;&#176;install the autotools under VxWorks&#161;&#177; mean install the autotools on the host or on the target ?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Jing Zhang  
</span><br>
<span class="quotelev1">&gt; &#183;&#162;&#188;&#254;&#200;&#203;: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]] &#180;&#250;&#177;&#237; Ralph Castain
</span><br>
<span class="quotelev1">&gt; &#183;&#162;&#203;&#205;&#202;&#177;&#188;&#228;: 2010&#196;&#234;4&#212;&#194;16&#200;&#213; 11:36
</span><br>
<span class="quotelev1">&gt; &#202;&#213;&#188;&#254;&#200;&#203;: Open MPI Developers
</span><br>
<span class="quotelev1">&gt; &#214;&#247;&#204;&#226;: Re: [OMPI devel] Migrate the OpenMPI to VxWorks
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I have not personally tried, but I am pretty sure that you can install the autotools under VxWorks - have you tried to download the latest autotool tarballs and build them?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; On Apr 15, 2010, at 9:30 PM, &#213;&#197;&#190;&#167; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello everyone ,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; For the purpose to migrate the OpenMPI to VxWorks ,I have set up a VxWorks development environment with WorkBench 3.0. It is really a good news that the WorkBench supports gnu building tools, bash and some frequently used command like sed ,awd and so on but not the Autotools (Autoconf/Automake) .Once I wonder the configure script file generated under the linux may work well under the workbench shell environment . But it is a frustrate to find when I launch the configure ,it just hang without any prompt .I look into the problem and found maybe the version of the bash in the VxWorks is too low to parse the configure file .
</span><br>
<span class="quotelev1">&gt; Then I come across the cmake which is used to as building tools under windows for the openmpi. Because of the feature of &#161;&#176;cross-platform&#161;&#177; ,I think it is possible to use cmake to migrate .Also I found boostcmake project which supports the vxworks gnu compile tools using cmake .
</span><br>
<span class="quotelev1">&gt; But considering my poor knowledge about the building system (Autotools,cmake,etc),I need some guide and advice to review what I plan to do is a possible .
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Thank you in advance !
</span><br>
<span class="quotelev1">&gt; Jing Zhang  
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-7764/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7765.php">Terry Dontje: "Re: [OMPI devel] RFC: Deprecate rankfile?"</a>
<li><strong>Previous message:</strong> <a href="7763.php">Ralph Castain: "Re: [OMPI devel] RFC: Deprecate rankfile?"</a>
<li><strong>In reply to:</strong> <a href="7759.php">&#213;&#197;&#190;&#167;: "[OMPI devel] &#180;&#240;&#184;&#180;: [OMPI devel] Migrate the OpenMPI to VxWorks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7766.php">张晶: "[OMPI devel] &#180;&#240;&#184;&#180;: [OMPI devel] &#180;&#240;&#184;&#180;:  Migrate the OpenMPI to VxWorks"</a>
<li><strong>Reply:</strong> <a href="7766.php">张晶: "[OMPI devel] &#180;&#240;&#184;&#180;: [OMPI devel] &#180;&#240;&#184;&#180;:  Migrate the OpenMPI to VxWorks"</a>
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

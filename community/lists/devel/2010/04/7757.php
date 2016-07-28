<?
$subject_val = "Re: [OMPI devel] Migrate the OpenMPI to VxWorks";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 15 23:35:47 2010" -->
<!-- isoreceived="20100416033547" -->
<!-- sent="Thu, 15 Apr 2010 21:35:37 -0600" -->
<!-- isosent="20100416033537" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Migrate the OpenMPI to VxWorks" -->
<!-- id="DC91CC39-6003-45B7-B8F9-65EA3F184AE4_at_open-mpi.org" -->
<!-- charset="GB2312" -->
<!-- inreplyto="4bc7d9bb.652be50a.082c.ffff8116_at_mx.google.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Migrate the OpenMPI to VxWorks<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-15 23:35:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7758.php">Ralf Wildenhues: "Re: [OMPI devel] Migrate the OpenMPI to VxWorks"</a>
<li><strong>Previous message:</strong> <a href="7756.php">&#213;&#197;&#190;&#167;: "[OMPI devel] Migrate the OpenMPI to VxWorks"</a>
<li><strong>In reply to:</strong> <a href="7756.php">&#213;&#197;&#190;&#167;: "[OMPI devel] Migrate the OpenMPI to VxWorks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7758.php">Ralf Wildenhues: "Re: [OMPI devel] Migrate the OpenMPI to VxWorks"</a>
<li><strong>Reply:</strong> <a href="7758.php">Ralf Wildenhues: "Re: [OMPI devel] Migrate the OpenMPI to VxWorks"</a>
<li><strong>Reply:</strong> <a href="7759.php">’≈æß: "[OMPI devel] &#180;&#240;&#184;&#180;: [OMPI devel] Migrate the OpenMPI to VxWorks"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have not personally tried, but I am pretty sure that you can install the autotools under VxWorks - have you tried to download the latest autotool tarballs and build them?
<br>
<p>On Apr 15, 2010, at 9:30 PM, &#213;&#197;&#190;&#167; wrote:
<br>
<p><span class="quotelev1">&gt; Hello everyone ,
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-7757/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7758.php">Ralf Wildenhues: "Re: [OMPI devel] Migrate the OpenMPI to VxWorks"</a>
<li><strong>Previous message:</strong> <a href="7756.php">&#213;&#197;&#190;&#167;: "[OMPI devel] Migrate the OpenMPI to VxWorks"</a>
<li><strong>In reply to:</strong> <a href="7756.php">&#213;&#197;&#190;&#167;: "[OMPI devel] Migrate the OpenMPI to VxWorks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7758.php">Ralf Wildenhues: "Re: [OMPI devel] Migrate the OpenMPI to VxWorks"</a>
<li><strong>Reply:</strong> <a href="7758.php">Ralf Wildenhues: "Re: [OMPI devel] Migrate the OpenMPI to VxWorks"</a>
<li><strong>Reply:</strong> <a href="7759.php">’≈æß: "[OMPI devel] &#180;&#240;&#184;&#180;: [OMPI devel] Migrate the OpenMPI to VxWorks"</a>
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

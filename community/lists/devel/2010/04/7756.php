<?
$subject_val = "[OMPI devel] Migrate the OpenMPI to VxWorks";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 15 23:30:08 2010" -->
<!-- isoreceived="20100416033008" -->
<!-- sent="Fri, 16 Apr 2010 11:30:00 +0800" -->
<!-- isosent="20100416033000" -->
<!-- name="&#213;&#197;&#190;&#167;" -->
<!-- email="iam.chilli_at_[hidden]" -->
<!-- subject="[OMPI devel] Migrate the OpenMPI to VxWorks" -->
<!-- id="4bc7d9bb.652be50a.082c.ffff8116_at_mx.google.com" -->
<!-- charset="gb2312" -->
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
<strong>Subject:</strong> [OMPI devel] Migrate the OpenMPI to VxWorks<br>
<strong>From:</strong> &#213;&#197;&#190;&#167; (<em>iam.chilli_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-15 23:30:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7757.php">Ralph Castain: "Re: [OMPI devel] Migrate the OpenMPI to VxWorks"</a>
<li><strong>Previous message:</strong> <a href="7755.php">Ralph Castain: "Re: [OMPI devel] RFC: Deprecate rankfile?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7757.php">Ralph Castain: "Re: [OMPI devel] Migrate the OpenMPI to VxWorks"</a>
<li><strong>Reply:</strong> <a href="7757.php">Ralph Castain: "Re: [OMPI devel] Migrate the OpenMPI to VxWorks"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello everyone ,
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
<p><p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-7756/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7757.php">Ralph Castain: "Re: [OMPI devel] Migrate the OpenMPI to VxWorks"</a>
<li><strong>Previous message:</strong> <a href="7755.php">Ralph Castain: "Re: [OMPI devel] RFC: Deprecate rankfile?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7757.php">Ralph Castain: "Re: [OMPI devel] Migrate the OpenMPI to VxWorks"</a>
<li><strong>Reply:</strong> <a href="7757.php">Ralph Castain: "Re: [OMPI devel] Migrate the OpenMPI to VxWorks"</a>
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

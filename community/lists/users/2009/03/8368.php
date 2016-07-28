<?
$subject_val = "Re: [OMPI users] only see ras info doing ompi_info for sge";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar  9 13:34:54 2009" -->
<!-- isoreceived="20090309173454" -->
<!-- sent="Mon, 9 Mar 2009 11:34:20 -0600" -->
<!-- isosent="20090309173420" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] only see ras info doing ompi_info for sge" -->
<!-- id="DF00A102-D06F-49A9-A45A-58721B1577B2_at_lanl.gov" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="52B7AD4481DAB448AA2A477E44A609F208CF1544_at_XCH-SW-1V1.sw.nos.boeing.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] only see ras info doing ompi_info for sge<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-09 13:34:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8369.php">Borenstein, Bernard S: "[OMPI users] inconsistant FAQ entries - building openmpi with sge and running openmpi with sge"</a>
<li><strong>Previous message:</strong> <a href="8367.php">Rolf Vandevaart: "Re: [OMPI users] only see ras info doing ompi_info for sge"</a>
<li><strong>In reply to:</strong> <a href="8366.php">Borenstein, Bernard S: "[OMPI users] only see ras info doing ompi_info for sge"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There no longer is a &quot;pls&quot; framework in 1.3, which is why you no  
<br>
longer see it. The run-time support in OMPI 1.3 underwent a  
<br>
substantial rewrite, with a number of the frameworks being removed and/ 
<br>
or replaced. So the mca params have changed accordingly.
<br>
<p>Ralph
<br>
<p><p>On Mar 9, 2009, at 11:20 AM, Borenstein, Bernard S wrote:
<br>
<p><span class="quotelev1">&gt; With version 1.3, should I see the both MCA ras and MCA pls when  
</span><br>
<span class="quotelev1">&gt; doing an ompi_info.  After doing my build with 1.3, I only see the  
</span><br>
<span class="quotelev1">&gt; ras component.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Bernie Borenstein
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes I know I didn&#146;t attach any info, but I&#146;m just trying to  
</span><br>
<span class="quotelev1">&gt; determine if there is a problem or something has changed between  
</span><br>
<span class="quotelev1">&gt; 1.2.8 and 1.3.
</span><br>
<span class="quotelev1">&gt; I&#146;m doing a configure &#150;with-sge &#150;enable-static &#150;disable-shared
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Bernie
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; __________ Information from ESET NOD32 Antivirus, version of virus  
</span><br>
<span class="quotelev1">&gt; signature database 3921 (20090309) __________
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The message was checked by ESET NOD32 Antivirus.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.eset.com">http://www.eset.com</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8368/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8369.php">Borenstein, Bernard S: "[OMPI users] inconsistant FAQ entries - building openmpi with sge and running openmpi with sge"</a>
<li><strong>Previous message:</strong> <a href="8367.php">Rolf Vandevaart: "Re: [OMPI users] only see ras info doing ompi_info for sge"</a>
<li><strong>In reply to:</strong> <a href="8366.php">Borenstein, Bernard S: "[OMPI users] only see ras info doing ompi_info for sge"</a>
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

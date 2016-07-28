<?
$subject_val = "Re: [OMPI users] configuration of openmpi-1.5.4 with visual studio";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  9 12:13:00 2012" -->
<!-- isoreceived="20120409161300" -->
<!-- sent="Mon, 9 Apr 2012 12:12:56 -0400" -->
<!-- isosent="20120409161256" -->
<!-- name="Greg Blair" -->
<!-- email="greg.blair_at_[hidden]" -->
<!-- subject="Re: [OMPI users] configuration of openmpi-1.5.4 with visual studio" -->
<!-- id="CAGBXJ-tf8i9HTkpyzN1qa5CW3_9W8pZ49o8dMXsMg-M_hcQY+w_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAGBXJ-srwpSZqgp65MZaYozAdcoG5iBKFMf-ZuLjJkcBBLY0HA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] configuration of openmpi-1.5.4 with visual studio<br>
<strong>From:</strong> Greg Blair (<em>greg.blair_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-09 12:12:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18972.php">Shiqing Fan: "Re: [OMPI users] configuration of openmpi-1.5.4 with visual studio"</a>
<li><strong>Previous message:</strong> <a href="18970.php">Greg Blair: "Re: [OMPI users] configuration of openmpi-1.5.4 with visual studio"</a>
<li><strong>In reply to:</strong> <a href="18970.php">Greg Blair: "Re: [OMPI users] configuration of openmpi-1.5.4 with visual studio"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18972.php">Shiqing Fan: "Re: [OMPI users] configuration of openmpi-1.5.4 with visual studio"</a>
<li><strong>Reply:</strong> <a href="18972.php">Shiqing Fan: "Re: [OMPI users] configuration of openmpi-1.5.4 with visual studio"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
After we had OpenMPI 1.54 working, we moved to OpenMPI 1.55 without incident.
<br>
<p>However, neither 1.54 nor 1.55  would link any reference to comm_world
<br>
generated
<br>
from C or C++ until we defined the following three compiler defines
<br>
&nbsp;&nbsp;&nbsp;1. OMPI_IMPORTS
<br>
&nbsp;&nbsp;&nbsp;2. OPAL_IMPORTS
<br>
&nbsp;&nbsp;&nbsp;3. ORTE_IMPORTS
<br>
<p>(drill down the MSVC IDE  menu system: View Solution Explorer,
<br>
Solution explorer,  properties, C/C++, Preprocessor, Preprocessor
<br>
Definitions and set OMPI_IMPORTS OPAL_IMPORTS and ORTE_IMPORTS)
<br>
<p>On 4/9/12, Greg Blair &lt;greg.blair_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; After we had OpenMPI 1.54 working, we moved to OpenMPI 1.55 without
</span><br>
<span class="quotelev1">&gt; incident.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, neither 1.54 nor 1.55  would link any reference to comm_world
</span><br>
<span class="quotelev1">&gt; from C or C++ until we defined the following three compile defines
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
-----------------
Greg Blair
Morgan Solar Inc.
30 Ordnance Street
Toronto  Ontario  M6K 1A2
Canada
CONFIDENTIAL
This message contains information that may be privileged or confidential and
is the property of the Morgan Solar Incorporated. It is intended only for
the person to whom it is addressed. If you are not the intended recipient,
you are not authorized to read, print, retain, copy, disseminate,
distribute, or use this message or any part thereof. If you receive this
message in error, please notify the sender immediately and delete all
copies of this message.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18972.php">Shiqing Fan: "Re: [OMPI users] configuration of openmpi-1.5.4 with visual studio"</a>
<li><strong>Previous message:</strong> <a href="18970.php">Greg Blair: "Re: [OMPI users] configuration of openmpi-1.5.4 with visual studio"</a>
<li><strong>In reply to:</strong> <a href="18970.php">Greg Blair: "Re: [OMPI users] configuration of openmpi-1.5.4 with visual studio"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18972.php">Shiqing Fan: "Re: [OMPI users] configuration of openmpi-1.5.4 with visual studio"</a>
<li><strong>Reply:</strong> <a href="18972.php">Shiqing Fan: "Re: [OMPI users] configuration of openmpi-1.5.4 with visual studio"</a>
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

<?
$subject_val = "Re: [OMPI users] I have still a problem with rankfiles in openmpi-1.6.4rc3";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  7 11:42:04 2013" -->
<!-- isoreceived="20130207164204" -->
<!-- sent="Thu, 07 Feb 2013 08:41:49 -0800" -->
<!-- isosent="20130207164149" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] I have still a problem with rankfiles in openmpi-1.6.4rc3" -->
<!-- id="5113D94D.7080402_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="201302070905.r1795l55014351_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] I have still a problem with rankfiles in openmpi-1.6.4rc3<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-07 11:41:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21329.php">Syed Ahsan Ali: "Re: [OMPI users] error while loading shared libraries: libhdf5.so.7:"</a>
<li><strong>Previous message:</strong> <a href="21327.php">Syed Ahsan Ali: "Re: [OMPI users] error while loading shared libraries: libhdf5.so.7:"</a>
<li><strong>In reply to:</strong> <a href="21324.php">Siegmar Gross: "Re: [OMPI users] I have still a problem with rankfiles in openmpi-1.6.4rc3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21332.php">Siegmar Gross: "Re: [OMPI users] I have still a problem with rankfiles in openmpi-1.6.4rc3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 02/07/13 01:05, Siegmar Gross wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; thank you very much for your patch. I have applied the patch to
</span><br>
<span class="quotelev1">&gt; openmpi-1.6.4rc4.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Open MPI: 1.6.4rc4r28022
</span><br>
<span class="quotelev1">&gt; : [B .][. .] (slot list 0:0)
</span><br>
<span class="quotelev1">&gt; : [. B][. .] (slot list 0:1)
</span><br>
<span class="quotelev1">&gt; : [B B][. .] (slot list 0:0-1)
</span><br>
<span class="quotelev1">&gt; : [. .][B .] (slot list 1:0)
</span><br>
<span class="quotelev1">&gt; : [. .][. B] (slot list 1:1)
</span><br>
<span class="quotelev1">&gt; : [. .][B B] (slot list 1:0-1)
</span><br>
<span class="quotelev1">&gt; : [B B][B B] (slot list 0:0-1,1:0-1)
</span><br>
<p>That looks great.  I'll file a CMR to get this patch into 1.6.  Unless you indicate otherwise, I'll assume this issue is understood 
<br>
for 1.6.
<br>
<p><span class="quotelev1">&gt; I get the following output for an unpatched openmpi-1.9.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Open MPI: 1.9a1r28035
</span><br>
<span class="quotelev1">&gt; : [B/.][./.]
</span><br>
<span class="quotelev1">&gt; : [B/B][./.]
</span><br>
<span class="quotelev1">&gt; : [B/B][./.]
</span><br>
<span class="quotelev1">&gt; : [./.][B/B]
</span><br>
<span class="quotelev1">&gt; : [./.][./B]
</span><br>
<span class="quotelev1">&gt; : [./.][B/B]
</span><br>
<span class="quotelev1">&gt; : [B/B][./.]
</span><br>
<p>Right.  There is something else going on for 1.9.  I think OMPI 1.9 is corrupting the binding strings.  In my case, I said &quot;0:1&quot; and 
<br>
the internal string was &quot;0,1&quot;.  So, although I should have binding to only one core (0:1), OMPI was trying to bind to two of them 
<br>
(0,1).  I'm still waiting for a response to other e-mail where I asked for hints where to find the problem in the source code.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21329.php">Syed Ahsan Ali: "Re: [OMPI users] error while loading shared libraries: libhdf5.so.7:"</a>
<li><strong>Previous message:</strong> <a href="21327.php">Syed Ahsan Ali: "Re: [OMPI users] error while loading shared libraries: libhdf5.so.7:"</a>
<li><strong>In reply to:</strong> <a href="21324.php">Siegmar Gross: "Re: [OMPI users] I have still a problem with rankfiles in openmpi-1.6.4rc3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21332.php">Siegmar Gross: "Re: [OMPI users] I have still a problem with rankfiles in openmpi-1.6.4rc3"</a>
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

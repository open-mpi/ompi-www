<?
$subject_val = "Re: [OMPI users] locked memory and queue pairs";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 17 08:51:34 2016" -->
<!-- isoreceived="20160317125134" -->
<!-- sent="Thu, 17 Mar 2016 08:51:32 -0400" -->
<!-- isosent="20160317125132" -->
<!-- name="Michael Di Domenico" -->
<!-- email="mdidomenico4_at_[hidden]" -->
<!-- subject="Re: [OMPI users] locked memory and queue pairs" -->
<!-- id="CABOsP2NTF1jk3V7BatSwEZT4_hx6ehBTdTeN8PS7Sbqk6cNQFg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="39196F20B4590A4A8337B6A6F7F0FD8D853E3906_at_FMSMSX102.amr.corp.intel.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] locked memory and queue pairs<br>
<strong>From:</strong> Michael Di Domenico (<em>mdidomenico4_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-17 08:51:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28727.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Issue about cm PML"</a>
<li><strong>Previous message:</strong> <a href="28725.php">Gilles Gouaillardet: "Re: [OMPI users] Issue about cm PML"</a>
<li><strong>In reply to:</strong> <a href="28718.php">Cabral, Matias A: "Re: [OMPI users] locked memory and queue pairs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28738.php">Cabral, Matias A: "Re: [OMPI users] locked memory and queue pairs"</a>
<li><strong>Reply:</strong> <a href="28738.php">Cabral, Matias A: "Re: [OMPI users] locked memory and queue pairs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Mar 16, 2016 at 4:49 PM, Cabral, Matias A
<br>
&lt;matias.a.cabral_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; I didn't go into the code to see who is actually calling this error message, but I suspect this may be a generic error for &quot;out of memory&quot; kind of thing and not specific to the que pair. To confirm please add  -mca pml_base_verbose 100 and add  -mca mtl_base_verbose 100  to see what is being selected.
</span><br>
<p>this didn't spit out anything overly useful, just lots of lines
<br>
<p>[node001:00909] mca: base: components_register: registering pml components
<br>
[node001:00909] mca: base: components_register: found loaded component v
<br>
[node001:00909] mca: base: components_register: component v register
<br>
function successful
<br>
[node001:00909] mca: base: components_register: found loaded component bfo
<br>
[node001:00909] mca: base: components_register: component bfo register
<br>
function successful
<br>
[node001:00909] mca: base: components_register: found loaded component cm
<br>
[node001:00909] mca: base: components_register: component cm register
<br>
function successful
<br>
[node001:00909] mca: base: components_register: found loaded component ob1
<br>
[node001:00909] mca: base: components_register: component ob1 register
<br>
function successful
<br>
<p><span class="quotelev1">&gt; I'm trying to remember some details of IMB  and alltoallv to see if it is indeed requiring more resources that the other micro benchmarks.
</span><br>
<p>i'm using IMB for my tests, but this issue came up because a
<br>
researcher isn't able to run large alltoall codes, so i don't believe
<br>
it's specific to IMB
<br>
<p><span class="quotelev1">&gt; BTW, did you confirm the limits setup? Also do the nodes have all the same amount of mem?
</span><br>
<p>yes, all nodes have the limits set to unlimited and each node has
<br>
256GB of memory
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28727.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Issue about cm PML"</a>
<li><strong>Previous message:</strong> <a href="28725.php">Gilles Gouaillardet: "Re: [OMPI users] Issue about cm PML"</a>
<li><strong>In reply to:</strong> <a href="28718.php">Cabral, Matias A: "Re: [OMPI users] locked memory and queue pairs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28738.php">Cabral, Matias A: "Re: [OMPI users] locked memory and queue pairs"</a>
<li><strong>Reply:</strong> <a href="28738.php">Cabral, Matias A: "Re: [OMPI users] locked memory and queue pairs"</a>
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

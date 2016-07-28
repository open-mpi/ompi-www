<?
$subject_val = "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  7 09:22:12 2010" -->
<!-- isoreceived="20100407132212" -->
<!-- sent="Wed, 07 Apr 2010 08:21:30 -0500" -->
<!-- isosent="20100407132130" -->
<!-- name="Oliver Geisler" -->
<!-- email="openmpi_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times" -->
<!-- id="4BBC86DA.1070905_at_docawk.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="24D0A21E-5C04-4B36-8D2D-1BF9E17B5072_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times<br>
<strong>From:</strong> Oliver Geisler (<em>openmpi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-07 09:21:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7709.php">Rolf vandeVaart: "[OMPI devel] RFC: Change bml_base_btl_array to an array of pointers"</a>
<li><strong>Previous message:</strong> <a href="7707.php">Jeff Squyres: "Re: [OMPI devel] adding ping-pong test to examples directory?"</a>
<li><strong>In reply to:</strong> <a href="7706.php">Jeff Squyres: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7711.php">Eugene Loh: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 4/6/2010 5:09 PM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Apr 6, 2010, at 6:04 PM, Oliver Geisler wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Further our benchmark started with &quot;--mca btl tcp,self&quot; runs with short
</span><br>
<span class="quotelev2">&gt;&gt; communication times, even using kernel 2.6.33.1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm not sure what this statement means (^^).  Can you explain?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
In the first place we witnessed the problem upgrading our hardware and
<br>
thus had to upgrade the running kernel version in order to get the
<br>
network cards running.
<br>
I used a typical application that we use on the cluster (in-house
<br>
development) to benchmark old vs. new hardware. There I witnessed an
<br>
performance drop instead of an increase to be expected.
<br>
Searching for the loss of performance we figured out that the pure
<br>
computation time on each data packet meets the expected increase due to
<br>
the accelerated hardware, but communication times between the master and
<br>
the slave processes increased largely.
<br>
Furthermore we broke down the problem to kernel versions larger than
<br>
2.6.23 (which we could not use, because the network cards aren't
<br>
supported yet)
<br>
Now that I run the program with mpirun option &quot;--mca btl tcp,self&quot;, I
<br>
could achieve shortened communication times (and all over completion
<br>
times as expected), even running on an new node with kernel version
<br>
2.6.33.1.
<br>
<p><span class="quotelev2">&gt;&gt; Is there a way to see what type of communication is actually selected?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you &quot;--mca btl tcp,self&quot; is used, then TCP sockets are used for non-self communications (i.e., communications with peer MPI processes, regardless of location).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Can anybody imagine why shared memory leads to these problems?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm not sure I understand this -- if &quot;--mca btl tcp,self&quot;, shared memory is not used...?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
When I use &quot;--mca btl sm,selfm&quot;, I get the issue, so my guess is it has
<br>
to do something with shared memory?
<br>
<p><span class="quotelev1">&gt; ....re-reading your email, I'm wondering: did you run the NPmpi process with &quot;--mca btl tcp,sm,self&quot; (or no --mca btl param)?  That might explain some of my confusion, above.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
I ran NPmpi without explicit mca-btl option .. which should default to
<br>
/etc/openmpi/openmpi-mca-params.conf with
<br>
btl = self,sm,tcp
<br>
<p><p><p><pre>
-- 
-
--------------------------------------------------------------------------------
Oliver Geisler
TERRASYS Geophysics
3100 Wilcrest Drive                      www.terrasysgeo.com
Suite 325
                                         Tel: +1-713-893-3630
Houston, TX 77042                        Fax: +1-713-893-3631
United States
                                         e-mail: geisler_at_[hidden]
-
--------------------------------------------------------------------------------
TERRASYS Geophysics USA Inc.             UBI#: 602 171 274
15131 Carter Loop SE                     FEIN: 52-726308
Yelm, WA 98597
-
--------------------------------------------------------------------------------
This e-mail contains proprietary information some or all
of which may be legally privileged.
It is for the intended recipient only. The views expressed
in this e-mail may not be official policy, but the personal
views of the originator.
If an addressing or transmission error has misdirected this
e-mail, please notify the author by replying to this e-mail.
If you are not the intended recipient you must not use,
disclose, distribute, copy, print, or rely on this e-mail.
All messages sent and received are monitored for viruses
and high risk file extensions.
-- 
This message has been scanned for viruses and
dangerous content by MailScanner, and is
believed to be clean.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7709.php">Rolf vandeVaart: "[OMPI devel] RFC: Change bml_base_btl_array to an array of pointers"</a>
<li><strong>Previous message:</strong> <a href="7707.php">Jeff Squyres: "Re: [OMPI devel] adding ping-pong test to examples directory?"</a>
<li><strong>In reply to:</strong> <a href="7706.php">Jeff Squyres: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7711.php">Eugene Loh: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
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

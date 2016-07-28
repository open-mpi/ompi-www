<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Apr 18 12:19:19 2007" -->
<!-- isoreceived="20070418161919" -->
<!-- sent="Wed, 18 Apr 2007 09:19:25 -0700" -->
<!-- isosent="20070418161925" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] replace 'atoi' with 'strtol'" -->
<!-- id="4626450D.7030908_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="adafy6xy8yj.fsf_at_cisco.com" -->
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
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-18 12:19:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1439.php">Roland Dreier: "Re: [OMPI devel] replace 'atoi' with 'strtol'"</a>
<li><strong>Previous message:</strong> <a href="1437.php">Brian W. Barrett: "Re: [OMPI devel] replace 'atoi' with 'strtol'"</a>
<li><strong>In reply to:</strong> <a href="1434.php">Roland Dreier: "Re: [OMPI devel] replace 'atoi' with 'strtol'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1430.php">Brian W. Barrett: "Re: [OMPI devel] replace 'atoi' with 'strtol'"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Roland Dreier wrote:
<br>
<span class="quotelev2">&gt;  &gt; Because the target variable is an (int).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I were writing the code, I would leave the cast out.  By assigning
</span><br>
<span class="quotelev1">&gt; the value to an int variable, you get the same effect anyway, so the
</span><br>
<span class="quotelev1">&gt; cast is redundant.  And if you ever change the variable to a long, now
</span><br>
<span class="quotelev1">&gt; you have to remember to delete the cast too.  So I don't see any
</span><br>
<span class="quotelev1">&gt; upside to having the cast.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But it's just a minor style issue...
</span><br>
<span class="quotelev1">&gt;   
</span><br>
Some compilers can warn about implicit narrowing conversions, such as 
<br>
one gets without the cast here when sizeof(long)&gt;sizeof(int), though 
<br>
none I know of due so by default.  Enabling such warnings can be a good 
<br>
way to look for 32 to 64-bit porting assumptions.  However, if one has 
<br>
too many false alarms, such as from intval=strtol(), then the real 
<br>
problems get lost in the noise.  As far as I am concerned, avoiding such 
<br>
warnings are the only motivation for including the cast here.  This may 
<br>
or may not be sufficient motivation to include it, depending on the 
<br>
developer.
<br>
<p>-Paul
<br>
<p>P.S.
<br>
IIRC  the '-Wcheck' option to the Intel compilers is one way to get 
<br>
warnings about implicit narrowing conversions, plus many other &quot;legal 
<br>
but potentially non-portable&quot; code idioms - well beyond the scope of the 
<br>
gcc '-Wall' option.
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group                 
HPC Research Department                   Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1439.php">Roland Dreier: "Re: [OMPI devel] replace 'atoi' with 'strtol'"</a>
<li><strong>Previous message:</strong> <a href="1437.php">Brian W. Barrett: "Re: [OMPI devel] replace 'atoi' with 'strtol'"</a>
<li><strong>In reply to:</strong> <a href="1434.php">Roland Dreier: "Re: [OMPI devel] replace 'atoi' with 'strtol'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1430.php">Brian W. Barrett: "Re: [OMPI devel] replace 'atoi' with 'strtol'"</a>
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

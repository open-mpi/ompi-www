<?
$subject_val = "Re: [OMPI devel] 1.5rc5: attribute((noreturn)) and pointers to functions";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 26 10:50:03 2010" -->
<!-- isoreceived="20100826145003" -->
<!-- sent="Thu, 26 Aug 2010 16:49:56 +0200" -->
<!-- isosent="20100826144956" -->
<!-- name="Rainer Keller" -->
<!-- email="keller_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.5rc5: attribute((noreturn)) and pointers to functions" -->
<!-- id="201008261649.57543.keller_at_hlrs.de" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4C7589B5.5060308_at_lbl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.5rc5: attribute((noreturn)) and pointers to functions<br>
<strong>From:</strong> Rainer Keller (<em>keller_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-26 10:49:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8386.php">Ralf Wildenhues: "Re: [OMPI devel] make install (libtool) failure on Solaris 10 (1.5rc5 and 1.4.3rc1)"</a>
<li><strong>Previous message:</strong> <a href="8384.php">Rainer Keller: "Re: [OMPI devel] 1.5rc5 - warnings from Sun C 5.10"</a>
<li><strong>In reply to:</strong> <a href="8361.php">Paul H. Hargrove: "[OMPI devel] 1.5rc5: attribute((noreturn)) and pointers to functions"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Paul,
<br>
having seen Your initial mail on Sun's support for noreturn (I have had some 
<br>
fun with their CC, see other mail, so I use g++), I implemented Your 
<br>
suggestion and tried with Sun's 12.1 compiler on Linux x86-64.
<br>
<p>I will commit this later in the day (touching m4...)
<br>
<p>Thanks,
<br>
Rainer
<br>
<p>PS: Please note, that the commit won't fix v1.5, since it depends on changes 
<br>
applied in r22872, revamping the errmgr, which have not been moved over.
<br>
<p><p><p>On Wednesday 25 August 2010 23:23:01 Paul H. Hargrove wrote:
<br>
<span class="quotelev1">&gt; Building 1.5rc5 with xlc on linux/ppc I see many instances of the
</span><br>
<span class="quotelev1">&gt; following warnings
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;../../../../orte/mca/ess/ess.h&quot;, line 61.16: 1506-959 (W) The attribute
</span><br>
<span class="quotelev1">&gt; &quot;noreturn&quot; is not a valid type attribute and is ignored.
</span><br>
<span class="quotelev1">&gt; &quot;../../../../orte/mca/errmgr/errmgr.h&quot;, line 134.16: 1506-959 (W) The
</span><br>
<span class="quotelev1">&gt; attribute &quot;noreturn&quot; is not a valid type attribute and is ignored.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is nearly the same as the Sun C 5.10 warning I reported in
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2010/08/8323.php">http://www.open-mpi.org/community/lists/devel/2010/08/8323.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;../../../../openmpi-1.5rc5/orte/mca/ess/ess.h&quot;, line 61: warning:
</span><br>
<span class="quotelev1">&gt; attribute &quot;noreturn&quot; may not be applied to variable, ignored
</span><br>
<span class="quotelev1">&gt; &quot;../../../../openmpi-1.5rc5/orte/mca/errmgr/errmgr.h&quot;, line 138:
</span><br>
<span class="quotelev1">&gt; warning: attribute &quot;noreturn&quot; may not be applied to variable, ignored
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This indicates a common cause and suggests a common solution:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In both cases the configure probe for compiler support for the
</span><br>
<span class="quotelev1">&gt; &quot;noreturn&quot; attribute has passed.  However, in both cases the compiler is
</span><br>
<span class="quotelev1">&gt; not happy applying this attribute to a pointer-to-function, (though gcc
</span><br>
<span class="quotelev1">&gt; is apparently fine with this).  I believe that the solution to this is
</span><br>
<span class="quotelev1">&gt; simply to add a &quot;noreturn_funcptr&quot; probe to
</span><br>
<span class="quotelev1">&gt; opal/config/opal_check_attributes.m4, analogous to the format_funcptr
</span><br>
<span class="quotelev1">&gt; probe and then define and use a __opal_attribute_noreturn_funcptr__ as
</span><br>
<span class="quotelev1">&gt; appropriate.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<p><pre>
-- 
----------------------------------------------------------------
 Dr.-Ing. Rainer Keller  <a href="http://www.hlrs.de/people/keller">http://www.hlrs.de/people/keller</a>
 HLRS                         Tel: ++49 (0)711-685 6 5858
 Nobelstrasse 19                 Fax: ++49 (0)711-685 6 5832
 70550 Stuttgart                    email: keller_at_[hidden]     
 Germany                             AIM/Skype:rusraink
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8386.php">Ralf Wildenhues: "Re: [OMPI devel] make install (libtool) failure on Solaris 10 (1.5rc5 and 1.4.3rc1)"</a>
<li><strong>Previous message:</strong> <a href="8384.php">Rainer Keller: "Re: [OMPI devel] 1.5rc5 - warnings from Sun C 5.10"</a>
<li><strong>In reply to:</strong> <a href="8361.php">Paul H. Hargrove: "[OMPI devel] 1.5rc5: attribute((noreturn)) and pointers to functions"</a>
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

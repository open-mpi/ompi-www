<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Apr 26 07:11:34 2007" -->
<!-- isoreceived="20070426111134" -->
<!-- sent="Thu, 26 Apr 2007 13:11:30 +0200" -->
<!-- isosent="20070426111130" -->
<!-- name="G&#246;tz Waschk" -->
<!-- email="goetz.waschk_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Portland Group Compiler &amp;quot;-Msignextend&amp;quot; flag" -->
<!-- id="5711d990704260411i4ddcc0bbk668df5029aedd599_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="p0624050bc255a0e8456f_at_129.105.110.38" -->
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
<strong>From:</strong> G&#246;tz Waschk (<em>goetz.waschk_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-26 07:11:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3148.php">Josh Hursey: "[OMPI users] Checkpoint/Restart Process Fault Tolerance Support"</a>
<li><strong>Previous message:</strong> <a href="3146.php">Peter Kjellstrom: "Re: [OMPI users] Call for Help: CPU topology needed!"</a>
<li><strong>Maybe in reply to:</strong> <a href="3143.php">Bruce Foster: "[OMPI users] Portland Group Compiler &quot;-Msignextend&quot; flag"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/05/3195.php">Jeff Squyres: "Re: [OMPI users] Portland Group Compiler &quot;-Msignextend&quot; flag"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/05/3195.php">Jeff Squyres: "Re: [OMPI users] Portland Group Compiler &quot;-Msignextend&quot; flag"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 4/26/07, Bruce Foster &lt;bef_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; The README instructions for PGI compilation have a typo:
</span><br>
<span class="quotelev1">&gt; Current context:
</span><br>
<span class="quotelev1">&gt; - The Portland Group compilers require the &quot;-Msignextend&quot; compiler
</span><br>
<span class="quotelev1">&gt;    flag to extend the sign bit when converting from a shorter to longer
</span><br>
<span class="quotelev1">&gt;    integer.  This is is different than other compilers (such as GNU).
</span><br>
<span class="quotelev1">&gt;    When compiling Open MPI with the Portland compiler suite, the
</span><br>
<span class="quotelev1">&gt;    following flags should be passed to Open MPI's configure script:
</span><br>
<p>Hi Bruce,
<br>
<p>let's quote the man page of pgcc:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-Msignextend (default) -Mnosignextend
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sign extend (don't sign extend) when a narrowing conversion
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;overflows.  For example, when -Msignextend is in effect and
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;an integer containing the value 65535 is converted to a
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;short, the value of the short will be -1.  ANSI C specifies
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;that the result of such conversions are undefined.
<br>
<p>This is PGI 7.0-2. So maybe the documentation should be changed into
<br>
'The Portland Group compilers prior to version 7.0 require ...'
<br>
<p>Regards, G&#246;tz Waschk
<br>
<pre>
-- 
AL I:40: Do what thou wilt shall be the whole of the Law.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3148.php">Josh Hursey: "[OMPI users] Checkpoint/Restart Process Fault Tolerance Support"</a>
<li><strong>Previous message:</strong> <a href="3146.php">Peter Kjellstrom: "Re: [OMPI users] Call for Help: CPU topology needed!"</a>
<li><strong>Maybe in reply to:</strong> <a href="3143.php">Bruce Foster: "[OMPI users] Portland Group Compiler &quot;-Msignextend&quot; flag"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/05/3195.php">Jeff Squyres: "Re: [OMPI users] Portland Group Compiler &quot;-Msignextend&quot; flag"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/05/3195.php">Jeff Squyres: "Re: [OMPI users] Portland Group Compiler &quot;-Msignextend&quot; flag"</a>
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

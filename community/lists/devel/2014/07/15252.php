<?
$subject_val = "Re: [OMPI devel] v1.8 - compile/dist problem";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 24 13:01:11 2014" -->
<!-- isoreceived="20140724170111" -->
<!-- sent="Thu, 24 Jul 2014 19:01:01 +0200" -->
<!-- isosent="20140724170101" -->
<!-- name="Bert Wesarg" -->
<!-- email="bert.wesarg_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] v1.8 - compile/dist problem" -->
<!-- id="53D13BCD.7080905_at_tu-dresden.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="39C3EB5E-1473-4E9A-9A43-557D0F2B9D57_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] v1.8 - compile/dist problem<br>
<strong>From:</strong> Bert Wesarg (<em>bert.wesarg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-24 13:01:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15253.php">Bert Wesarg: "Re: [OMPI devel] v1.8 - compile/dist problem"</a>
<li><strong>Previous message:</strong> <a href="15251.php">Rolf vandeVaart: "Re: [OMPI devel] PML-bfo deadlocks for message size &gt; eager limit after connection loss"</a>
<li><strong>In reply to:</strong> <a href="15250.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] v1.8 - compile/dist problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15253.php">Bert Wesarg: "Re: [OMPI devel] v1.8 - compile/dist problem"</a>
<li><strong>Reply:</strong> <a href="15253.php">Bert Wesarg: "Re: [OMPI devel] v1.8 - compile/dist problem"</a>
<li><strong>Reply:</strong> <a href="15255.php">Bert Wesarg: "Re: [OMPI devel] v1.8 - compile/dist problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 07/24/2014 03:59 PM, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; Another data point:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I just bootstrapped with Automake 1.14.1, and got the same result (i.e., ls -l before configure, the &quot;hooks&quot; directory is NOT there, run configure, ls -l and the &quot;hooks&quot; directory IS there).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm guessing something changed elsewhere in the toolchain on RHEL7/SLES12(beta) that is causing this problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Bert: how is the &quot;hooks&quot; directory normally created?  Do you have some specific .m4 that creates it?  Or is it a side-effect of something in configure?
</span><br>
<p>it is a side affect of the depfiles command called by configure. By 
<br>
coincident, this command is also the reason why we needed to made this 
<br>
change in the first place to support the subdir-objects option of 
<br>
automake. The depfiles command creates the .deps directory using the 
<br>
dirname of the source file if the subdir-objecs option is active. But if 
<br>
the source file contains make file variable references it can't resolve 
<br>
these (remember that it is called by configure) and creates directories 
<br>
like '$(VTUNIFY_ROOT)/hooks/.deps', literally. Now we rely that this 
<br>
depfiles command creates for us the hooks directory. I must admit that 
<br>
this is not bullet proof, and it may actually be removed in the future 
<br>
completely by automake/autoconf [1]. So it is best to handle the 
<br>
creation of this directory inside the VT Makefile altogether. The fix is 
<br>
simple though.
<br>
<p>Now there is still a problem: Matthias Jurenz is on vacation until 
<br>
August 5th. and I'm completely unfamiliar with the procedure how the VT 
<br>
code is updated in the ompi trunk. For what I see it should go like this:
<br>
<p>1. Commit into vendor/vampirtrace/current
<br>
2. Merge into trunk/ompi/contrib/vt/vt
<br>
3. Create a CMR for 1.8 with reviewer who? (Andreas is on vacation too ;-)
<br>
<p>Bert
<br>
<p>[1] <a href="http://debbugs.gnu.org/cgi/bugreport.cgi?bug=13928">http://debbugs.gnu.org/cgi/bugreport.cgi?bug=13928</a>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Read the reply from Stefann:
<br>
<p>&nbsp;&nbsp;&nbsp;- from Automake 2.0 onward, only enable the automatic dependency
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;tracking if GNU make is used; we can thus assume the presence
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;of the &quot;-include&quot; directive (which ignore non-existing files,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rather than punting), and its use will allow us to get rid of
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;the configure time machinery for the initial creation of .deps
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;directories (this has already been done in Automake-NG, and has
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;worked beautifully so far).
<br>
<p><pre>
-- 
Dipl.-Inf. Bert Wesarg
wiss. Mitarbeiter
Technische Universit&#228;t Dresden
Zentrum f&#252;r Informationsdienste und Hochleistungsrechnen (ZIH)
01062 Dresden
Tel.: +49 (351) 463-42451
Fax: +49 (351) 463-37773
E-Mail: bert.wesarg_at_[hidden]

</pre>
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15252/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15253.php">Bert Wesarg: "Re: [OMPI devel] v1.8 - compile/dist problem"</a>
<li><strong>Previous message:</strong> <a href="15251.php">Rolf vandeVaart: "Re: [OMPI devel] PML-bfo deadlocks for message size &gt; eager limit after connection loss"</a>
<li><strong>In reply to:</strong> <a href="15250.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] v1.8 - compile/dist problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15253.php">Bert Wesarg: "Re: [OMPI devel] v1.8 - compile/dist problem"</a>
<li><strong>Reply:</strong> <a href="15253.php">Bert Wesarg: "Re: [OMPI devel] v1.8 - compile/dist problem"</a>
<li><strong>Reply:</strong> <a href="15255.php">Bert Wesarg: "Re: [OMPI devel] v1.8 - compile/dist problem"</a>
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

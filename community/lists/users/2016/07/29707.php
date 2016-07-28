<?
$subject_val = "Re: [OMPI users] openmpi 1.10.2 and PGI 15.9";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 25 13:52:03 2016" -->
<!-- isoreceived="20160725175203" -->
<!-- sent="Mon, 25 Jul 2016 13:52:01 -0400" -->
<!-- isosent="20160725175201" -->
<!-- name="Michael Di Domenico" -->
<!-- email="mdidomenico4_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi 1.10.2 and PGI 15.9" -->
<!-- id="CABOsP2MT9+ML4nmJ4atreRRA6CcMao3A3sAqVDJM5rFDrqxpQQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="a106f541-21ec-bc69-9785-88616c2a152e_at_rist.or.jp" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi 1.10.2 and PGI 15.9<br>
<strong>From:</strong> Michael Di Domenico (<em>mdidomenico4_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-07-25 13:52:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29708.php">Gilles Gouaillardet: "Re: [OMPI users] openmpi 1.10.2 and PGI 15.9"</a>
<li><strong>Previous message:</strong> <a href="29706.php">Gilles Gouaillardet: "Re: [OMPI users] openmpi 1.10.2 and PGI 15.9"</a>
<li><strong>In reply to:</strong> <a href="29706.php">Gilles Gouaillardet: "Re: [OMPI users] openmpi 1.10.2 and PGI 15.9"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29708.php">Gilles Gouaillardet: "Re: [OMPI users] openmpi 1.10.2 and PGI 15.9"</a>
<li><strong>Reply:</strong> <a href="29708.php">Gilles Gouaillardet: "Re: [OMPI users] openmpi 1.10.2 and PGI 15.9"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Jul 25, 2016 at 4:53 AM, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; as a workaround, you can configure without -noswitcherror.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; after you ran configure, you have to manually patch the generated 'libtool'
</span><br>
<span class="quotelev1">&gt; file and add the line with pgcc*) and the next line like this :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /* if pgcc is used, libtool does *not* pass -pthread to pgcc any more */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        # Convert &quot;-framework foo&quot; to &quot;foo.ltframework&quot;
</span><br>
<span class="quotelev1">&gt;         # and &quot;-pthread&quot; to &quot;-Wl,-pthread&quot; if NAG compiler
</span><br>
<span class="quotelev1">&gt;         if test -n &quot;$inherited_linker_flags&quot;; then
</span><br>
<span class="quotelev1">&gt;           case &quot;$CC&quot; in
</span><br>
<span class="quotelev1">&gt;             nagfor*)
</span><br>
<span class="quotelev1">&gt;               tmp_inherited_linker_flags=`$ECHO &quot;$inherited_linker_flags&quot; |
</span><br>
<span class="quotelev1">&gt; $SED 's/-framework \([^ $]*\)/\1.ltframework/g' | $SED
</span><br>
<span class="quotelev1">&gt; 's/-pthread/-Wl,-pthread/g'`;;
</span><br>
<span class="quotelev1">&gt;             pgcc*)
</span><br>
<span class="quotelev1">&gt;               tmp_inherited_linker_flags=`$ECHO &quot;$inherited_linker_flags&quot; |
</span><br>
<span class="quotelev1">&gt; $SED 's/-framework \([^ $]*\)/\1.ltframework/g' | $SED 's/-pthread//g'`;;
</span><br>
<span class="quotelev1">&gt;             *)
</span><br>
<span class="quotelev1">&gt;               tmp_inherited_linker_flags=`$ECHO &quot;$inherited_linker_flags&quot; |
</span><br>
<span class="quotelev1">&gt; $SED 's/-framework \([^ $]*\)/\1.ltframework/g'`;;
</span><br>
<span class="quotelev1">&gt;           esac
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i guess the right way is to patch libtool so it passes -noswitcherror to $CC
</span><br>
<span class="quotelev1">&gt; and/or $LD, but i was not able to achieve that yet.
</span><br>
<p><p>Thanks.  I managed to work around the issue, by hand compiling the
<br>
single module that failed during the build process.  but something is
<br>
definitely amiss in the openmpi compile system when it comes to pgi
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29708.php">Gilles Gouaillardet: "Re: [OMPI users] openmpi 1.10.2 and PGI 15.9"</a>
<li><strong>Previous message:</strong> <a href="29706.php">Gilles Gouaillardet: "Re: [OMPI users] openmpi 1.10.2 and PGI 15.9"</a>
<li><strong>In reply to:</strong> <a href="29706.php">Gilles Gouaillardet: "Re: [OMPI users] openmpi 1.10.2 and PGI 15.9"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29708.php">Gilles Gouaillardet: "Re: [OMPI users] openmpi 1.10.2 and PGI 15.9"</a>
<li><strong>Reply:</strong> <a href="29708.php">Gilles Gouaillardet: "Re: [OMPI users] openmpi 1.10.2 and PGI 15.9"</a>
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

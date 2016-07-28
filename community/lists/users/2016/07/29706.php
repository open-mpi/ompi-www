<?
$subject_val = "Re: [OMPI users] openmpi 1.10.2 and PGI 15.9";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 25 04:53:25 2016" -->
<!-- isoreceived="20160725085325" -->
<!-- sent="Mon, 25 Jul 2016 17:53:21 +0900" -->
<!-- isosent="20160725085321" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi 1.10.2 and PGI 15.9" -->
<!-- id="a106f541-21ec-bc69-9785-88616c2a152e_at_rist.or.jp" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CABOsP2NuAXOQAoY8fn-4CrADuSO9d_fVi0O3idVcSSdoR=en9w_at_mail.gmail.com" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-07-25 04:53:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29707.php">Michael Di Domenico: "Re: [OMPI users] openmpi 1.10.2 and PGI 15.9"</a>
<li><strong>Previous message:</strong> <a href="29705.php">Gilles Gouaillardet: "Re: [OMPI users] ompi_info -c does not print configure arguments"</a>
<li><strong>In reply to:</strong> <a href="29702.php">Michael Di Domenico: "Re: [OMPI users] openmpi 1.10.2 and PGI 15.9"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29707.php">Michael Di Domenico: "Re: [OMPI users] openmpi 1.10.2 and PGI 15.9"</a>
<li><strong>Reply:</strong> <a href="29707.php">Michael Di Domenico: "Re: [OMPI users] openmpi 1.10.2 and PGI 15.9"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Michael,
<br>
<p><p>as a workaround, you can configure without -noswitcherror.
<br>
<p>after you ran configure, you have to manually patch the generated 
<br>
'libtool' file and add the line with pgcc*) and the next line like this :
<br>
<p>/* if pgcc is used, libtool does *not* pass -pthread to pgcc any more */
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# Convert &quot;-framework foo&quot; to &quot;foo.ltframework&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# and &quot;-pthread&quot; to &quot;-Wl,-pthread&quot; if NAG compiler
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if test -n &quot;$inherited_linker_flags&quot;; then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case &quot;$CC&quot; in
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;nagfor*)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;tmp_inherited_linker_flags=`$ECHO 
<br>
&quot;$inherited_linker_flags&quot; | $SED 's/-framework \([^ 
<br>
$]*\)/\1.ltframework/g' | $SED 's/-pthread/-Wl,-pthread/g'`;;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pgcc*)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;tmp_inherited_linker_flags=`$ECHO 
<br>
&quot;$inherited_linker_flags&quot; | $SED 's/-framework \([^ 
<br>
$]*\)/\1.ltframework/g' | $SED 's/-pthread//g'`;;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;tmp_inherited_linker_flags=`$ECHO 
<br>
&quot;$inherited_linker_flags&quot; | $SED 's/-framework \([^ 
<br>
$]*\)/\1.ltframework/g'`;;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;esac
<br>
<p><p>i guess the right way is to patch libtool so it passes -noswitcherror to 
<br>
$CC and/or $LD, but i was not able to achieve that yet.
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 7/23/2016 12:31 AM, Michael Di Domenico wrote:
<br>
<span class="quotelev1">&gt; So, the -noswitcherror is partially working.  I added the switch into
</span><br>
<span class="quotelev1">&gt; my configure line LDFLAGS param.  I can see the parameter being passed
</span><br>
<span class="quotelev1">&gt; to libtool, but for some reason libtool is refusing to passing it
</span><br>
<span class="quotelev1">&gt; along at compile.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; if i sh -x the libtool command line, i can see it set in a few
</span><br>
<span class="quotelev1">&gt; variables, but at the end when eval's the compile line for pgcc the
</span><br>
<span class="quotelev1">&gt; option is missing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; if i cut and past the eval line and hand put it back in, the library
</span><br>
<span class="quotelev1">&gt; compiles with a pgcc warning instead of an error which i believe what
</span><br>
<span class="quotelev1">&gt; i want, but i'm not sure why libtool is dropping the switch
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Jul 19, 2016 at 5:27 AM, Sylvain Jeaugey &lt;sjeaugey_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; As a workaround, you can also try adding -noswitcherror to PGCC flags.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 07/11/2016 03:52 PM, &#195;&#133;ke Sandgren wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Looks like you are compiling with slurm support.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If so, you need to remove the &quot;-pthread&quot; from libslurm.la and libpmi.la
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 07/11/2016 02:54 PM, Michael Di Domenico wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'm trying to get openmpi compiled using the PGI compiler.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the configure goes through and the code starts to compile, but then
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; gets hung up with
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; entering: openmpi-1.10.2/opal/mca/common/pmi
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; CC common_pmi.lo
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; CCLD libmca_common_pmi.la
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; pgcc-Error-Unknown switch: - pthread
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/07/29635.php">http://www.open-mpi.org/community/lists/users/2016/07/29635.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -----------------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; This email message is for the sole use of the intended recipient(s) and may
</span><br>
<span class="quotelev2">&gt;&gt; contain
</span><br>
<span class="quotelev2">&gt;&gt; confidential information.  Any unauthorized review, use, disclosure or
</span><br>
<span class="quotelev2">&gt;&gt; distribution
</span><br>
<span class="quotelev2">&gt;&gt; is prohibited.  If you are not the intended recipient, please contact the
</span><br>
<span class="quotelev2">&gt;&gt; sender by
</span><br>
<span class="quotelev2">&gt;&gt; reply email and destroy all copies of the original message.
</span><br>
<span class="quotelev2">&gt;&gt; -----------------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/07/29692.php">http://www.open-mpi.org/community/lists/users/2016/07/29692.php</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/07/29702.php">http://www.open-mpi.org/community/lists/users/2016/07/29702.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29707.php">Michael Di Domenico: "Re: [OMPI users] openmpi 1.10.2 and PGI 15.9"</a>
<li><strong>Previous message:</strong> <a href="29705.php">Gilles Gouaillardet: "Re: [OMPI users] ompi_info -c does not print configure arguments"</a>
<li><strong>In reply to:</strong> <a href="29702.php">Michael Di Domenico: "Re: [OMPI users] openmpi 1.10.2 and PGI 15.9"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29707.php">Michael Di Domenico: "Re: [OMPI users] openmpi 1.10.2 and PGI 15.9"</a>
<li><strong>Reply:</strong> <a href="29707.php">Michael Di Domenico: "Re: [OMPI users] openmpi 1.10.2 and PGI 15.9"</a>
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

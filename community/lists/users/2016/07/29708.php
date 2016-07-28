<?
$subject_val = "Re: [OMPI users] openmpi 1.10.2 and PGI 15.9";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 25 20:55:08 2016" -->
<!-- isoreceived="20160726005508" -->
<!-- sent="Tue, 26 Jul 2016 09:55:01 +0900" -->
<!-- isosent="20160726005501" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi 1.10.2 and PGI 15.9" -->
<!-- id="1a7aea99-5d3d-5666-ece1-7278352f72a4_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CABOsP2MT9+ML4nmJ4atreRRA6CcMao3A3sAqVDJM5rFDrqxpQQ_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2016-07-25 20:55:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29709.php">MM: "Re: [OMPI users] scatter/gather, tcp, 3 nodes, homogeneous, # RAM"</a>
<li><strong>Previous message:</strong> <a href="29707.php">Michael Di Domenico: "Re: [OMPI users] openmpi 1.10.2 and PGI 15.9"</a>
<li><strong>In reply to:</strong> <a href="29707.php">Michael Di Domenico: "Re: [OMPI users] openmpi 1.10.2 and PGI 15.9"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29675.php">Thomas Jahns: "Re: [OMPI users] openmpi 1.10.2 and PGI 15.9"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Michael,
<br>
<p><p>i will followup on that in the devel mailing list.
<br>
<p><p>imho, there are three ways to see this :
<br>
<p>1) this is an environment (e.g. user) issue: if you want it to work, 
<br>
then slurm should be rebuilt with pgi compiler.
<br>
<p>2) this is a libtool issue : it does not support mixing .la files built 
<br>
with gcc and pgcc (e.g. -pthread option is unknown by pgcc)
<br>
<p>3) this is an other libtool issue : -noswitcherror should be passed by 
<br>
libtool to the PGI compiler
<br>
<p><p>Open MPI is not to be blamed here.
<br>
<p>that being said, i am pragmatic so i do not mind hacking (one more time 
<br>
...) libtool in OpenMPI to fix libtool or even make it PGI/GNU friendly
<br>
<p><p>Cheers,
<br>
<p><p>Gilles
<br>
<p><p>On 7/26/2016 2:52 AM, Michael Di Domenico wrote:
<br>
<span class="quotelev1">&gt; On Mon, Jul 25, 2016 at 4:53 AM, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; as a workaround, you can configure without -noswitcherror.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; after you ran configure, you have to manually patch the generated 'libtool'
</span><br>
<span class="quotelev2">&gt;&gt; file and add the line with pgcc*) and the next line like this :
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /* if pgcc is used, libtool does *not* pass -pthread to pgcc any more */
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         # Convert &quot;-framework foo&quot; to &quot;foo.ltframework&quot;
</span><br>
<span class="quotelev2">&gt;&gt;          # and &quot;-pthread&quot; to &quot;-Wl,-pthread&quot; if NAG compiler
</span><br>
<span class="quotelev2">&gt;&gt;          if test -n &quot;$inherited_linker_flags&quot;; then
</span><br>
<span class="quotelev2">&gt;&gt;            case &quot;$CC&quot; in
</span><br>
<span class="quotelev2">&gt;&gt;              nagfor*)
</span><br>
<span class="quotelev2">&gt;&gt;                tmp_inherited_linker_flags=`$ECHO &quot;$inherited_linker_flags&quot; |
</span><br>
<span class="quotelev2">&gt;&gt; $SED 's/-framework \([^ $]*\)/\1.ltframework/g' | $SED
</span><br>
<span class="quotelev2">&gt;&gt; 's/-pthread/-Wl,-pthread/g'`;;
</span><br>
<span class="quotelev2">&gt;&gt;              pgcc*)
</span><br>
<span class="quotelev2">&gt;&gt;                tmp_inherited_linker_flags=`$ECHO &quot;$inherited_linker_flags&quot; |
</span><br>
<span class="quotelev2">&gt;&gt; $SED 's/-framework \([^ $]*\)/\1.ltframework/g' | $SED 's/-pthread//g'`;;
</span><br>
<span class="quotelev2">&gt;&gt;              *)
</span><br>
<span class="quotelev2">&gt;&gt;                tmp_inherited_linker_flags=`$ECHO &quot;$inherited_linker_flags&quot; |
</span><br>
<span class="quotelev2">&gt;&gt; $SED 's/-framework \([^ $]*\)/\1.ltframework/g'`;;
</span><br>
<span class="quotelev2">&gt;&gt;            esac
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; i guess the right way is to patch libtool so it passes -noswitcherror to $CC
</span><br>
<span class="quotelev2">&gt;&gt; and/or $LD, but i was not able to achieve that yet.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks.  I managed to work around the issue, by hand compiling the
</span><br>
<span class="quotelev1">&gt; single module that failed during the build process.  but something is
</span><br>
<span class="quotelev1">&gt; definitely amiss in the openmpi compile system when it comes to pgi
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/07/29707.php">http://www.open-mpi.org/community/lists/users/2016/07/29707.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29709.php">MM: "Re: [OMPI users] scatter/gather, tcp, 3 nodes, homogeneous, # RAM"</a>
<li><strong>Previous message:</strong> <a href="29707.php">Michael Di Domenico: "Re: [OMPI users] openmpi 1.10.2 and PGI 15.9"</a>
<li><strong>In reply to:</strong> <a href="29707.php">Michael Di Domenico: "Re: [OMPI users] openmpi 1.10.2 and PGI 15.9"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29675.php">Thomas Jahns: "Re: [OMPI users] openmpi 1.10.2 and PGI 15.9"</a>
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

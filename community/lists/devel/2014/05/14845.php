<?
$subject_val = "Re: [OMPI devel] ompi_info not Giving Complete Output";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 27 01:02:29 2014" -->
<!-- isoreceived="20140527050229" -->
<!-- sent="Tue, 27 May 2014 14:02:29 +0900" -->
<!-- isosent="20140527050229" -->
<!-- name="Kevin Brown" -->
<!-- email="brown.k.aa_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] ompi_info not Giving Complete Output" -->
<!-- id="CAMUxY1_24YcyFa1Z+gyca6D9NvTU_GuA0yYQ9053iGGS9TAGQg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="75A2EC4F-86A6-46C0-AB18-D08A90E788CC_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] ompi_info not Giving Complete Output<br>
<strong>From:</strong> Kevin Brown (<em>brown.k.aa_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-27 01:02:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14846.php">Gilles Gouaillardet: "[OMPI devel] OMPI Opengrok config"</a>
<li><strong>Previous message:</strong> <a href="14844.php">Ralph Castain: "[OMPI devel] PMIx web page updated"</a>
<li><strong>In reply to:</strong> <a href="14843.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] ompi_info not Giving Complete Output"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ah, I see.
<br>
Thanks a lot guys.
<br>
<p>Kevin
<br>
------------------------------
<br>
*Kevin A. Brown* *|* Tokyo Institute of Technology *|* *E-mail*:
<br>
brown.k.aa_at_[hidden]
<br>
<p><p>On Tue, May 27, 2014 at 3:06 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; Or use --all.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 26, 2014, at 10:21 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Try adding &quot;--level 9&quot; to the cmd line. It's a new &quot;feature&quot; to try and
</span><br>
<span class="quotelev1">&gt; reduce the volume of data being thrown at the user as the majority of
</span><br>
<span class="quotelev1">&gt; params are frequently of use only to us developers
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On May 26, 2014, at 7:14 AM, Kevin Brown &lt;brown.k.aa_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Greetings,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I've just noticed that ompi_info (Open MPI v. 1.8.1) is not giving a
</span><br>
<span class="quotelev1">&gt; complete listing when ran with the following options:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; rc000:~ &gt; ~/opt/openmpi-1.8.1-base/bin/ompi_info --param all all
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                  MCA btl: parameter &quot;btl_tcp_if_include&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;&quot;,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                           data source: default, level: 1 user/basic,
</span><br>
<span class="quotelev1">&gt; type:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                           string)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                           Comma-delimited list of devices and/or CIDR
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                           notation of networks to use for MPI
</span><br>
<span class="quotelev1">&gt; communication
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                           (e.g., &quot;eth0,192.168.0.0/16&quot;).  Mutually
</span><br>
<span class="quotelev1">&gt; exclusive
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                           with btl_tcp_if_exclude.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                  MCA btl: parameter &quot;btl_tcp_if_exclude&quot; (current value:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                           &quot;127.0.0.1/8,sppp&quot;, data source: default,
</span><br>
<span class="quotelev1">&gt; level: 1
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                           user/basic, type: string)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                           Comma-delimited list of devices and/or CIDR
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                           notation of networks to NOT use for MPI
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                           communication -- all devices not matching
</span><br>
<span class="quotelev1">&gt; these
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                           specifications will be used (e.g.,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                           &quot;eth0,192.168.0.0/16&quot;).  If set to a
</span><br>
<span class="quotelev1">&gt; non-default
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                           value, it is mutually exclusive with
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                           btl_tcp_if_include.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; rc000:~ &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The info shown above is the only output given by the command.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Configuration info has been attached to this mail.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Is this correct behavior?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Kevin
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Kevin A. Brown | Tokyo Institute of Technology  | E-mail:
</span><br>
<span class="quotelev1">&gt; brown.k.aa_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &lt;configs_and_outputs.tar.bz2&gt;_______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14841.php">http://www.open-mpi.org/community/lists/devel/2014/05/14841.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14842.php">http://www.open-mpi.org/community/lists/devel/2014/05/14842.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14843.php">http://www.open-mpi.org/community/lists/devel/2014/05/14843.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14845/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14846.php">Gilles Gouaillardet: "[OMPI devel] OMPI Opengrok config"</a>
<li><strong>Previous message:</strong> <a href="14844.php">Ralph Castain: "[OMPI devel] PMIx web page updated"</a>
<li><strong>In reply to:</strong> <a href="14843.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] ompi_info not Giving Complete Output"</a>
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

<?
$subject_val = "Re: [OMPI devel] typo in opal/event/evutil.h ?";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Feb 27 02:31:12 2010" -->
<!-- isoreceived="20100227073112" -->
<!-- sent="Sat, 27 Feb 2010 00:31:01 -0700" -->
<!-- isosent="20100227073101" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] typo in opal/event/evutil.h ?" -->
<!-- id="0C290769-8709-4204-9ECF-0926E7A1F9D8_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1267193172.2597.65.camel_at_frecb014522.frec.bull.fr" -->
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
<strong>Subject:</strong> Re: [OMPI devel] typo in opal/event/evutil.h ?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-27 02:31:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7512.php">Ralph Castain: "Re: [OMPI devel] Openmpi with slurm : salloc -c"</a>
<li><strong>Previous message:</strong> <a href="7510.php">Damien Guinier: "[OMPI devel] Openmpi with slurm : salloc -c"</a>
<li><strong>In reply to:</strong> <a href="7508.php">Nadia Derbey: "Re: [OMPI devel] typo in opal/event/evutil.h ?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I checked the trunk and it is indeed wrong (the LONG had been fixed, but not this one). Why don't you go ahead and commit it?
<br>
<p>On Feb 26, 2010, at 7:06 AM, Nadia Derbey wrote:
<br>
<p><span class="quotelev1">&gt; On Fri, 2010-02-26 at 06:41 -0700, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi Nadia
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I thought I saw a correction go by recently that fixed this in the
</span><br>
<span class="quotelev2">&gt;&gt; trunk? What revision are you at, and on which branch?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1) hg branch:
</span><br>
<span class="quotelev1">&gt; default
</span><br>
<span class="quotelev1">&gt; But I'm getting the warning in the v1.5 branch too.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2)
</span><br>
<span class="quotelev1">&gt; changeset:   17631:177d287dee3c
</span><br>
<span class="quotelev1">&gt; user:        jsquyres
</span><br>
<span class="quotelev1">&gt; date:        Thu Feb 25 21:04:09 2010 +0000
</span><br>
<span class="quotelev1">&gt; summary:     This has bugged me for a long, long time: rename
</span><br>
<span class="quotelev1">&gt; btl_openib_iwarp.*
</span><br>
<span class="quotelev1">&gt; -&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 3) configure options:
</span><br>
<span class="quotelev1">&gt; --with-platform=../contrib/platform/optimized --enable-picky
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 4) Last update on this file is for me:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; changeset:   17413:32687831ca9e
</span><br>
<span class="quotelev1">&gt; user:        brbarret
</span><br>
<span class="quotelev1">&gt; date:        Thu Feb 04 05:38:30 2010 +0000
</span><br>
<span class="quotelev1">&gt; summary:     Update libevent to 1.4.13
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But maybe something got messed here in our repo, will check.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Nadia
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Fri, Feb 26, 2010 at 3:48 AM, Nadia Derbey &lt;Nadia.Derbey_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;        Hi,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;        I'm getting this warning during the make if configured with
</span><br>
<span class="quotelev2">&gt;&gt;        --enable-picky:
</span><br>
<span class="quotelev2">&gt;&gt;        ../../../../opal/event/evutil.h:62:7: warning:
</span><br>
<span class="quotelev2">&gt;&gt;        &quot;_EVENT_SIZEOF_LONG_LONG&quot;
</span><br>
<span class="quotelev2">&gt;&gt;        is not defined
</span><br>
<span class="quotelev2">&gt;&gt;        Looks like changeset #32687831ca9e has introduced a typo?
</span><br>
<span class="quotelev2">&gt;&gt;        I'm wondering whether _EVENT_SIZEOF_LONG_LONG shouldn't be
</span><br>
<span class="quotelev2">&gt;&gt;        changed to
</span><br>
<span class="quotelev2">&gt;&gt;        SIZEOF_LONG_LONG?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;        --- a/opal/event/evutil.h       Thu Feb 25 21:04:09 2010 +0000
</span><br>
<span class="quotelev2">&gt;&gt;        +++ b/opal/event/evutil.h       Fri Feb 26 10:29:31 2010 +0100
</span><br>
<span class="quotelev2">&gt;&gt;        @@ -59,7 +59,7 @@ extern &quot;C&quot; {
</span><br>
<span class="quotelev2">&gt;&gt;         #elif defined(WIN32)
</span><br>
<span class="quotelev2">&gt;&gt;         #define ev_uint64_t unsigned __int64
</span><br>
<span class="quotelev2">&gt;&gt;         #define ev_int64_t signed __int64
</span><br>
<span class="quotelev2">&gt;&gt;        -#elif _EVENT_SIZEOF_LONG_LONG == 8
</span><br>
<span class="quotelev2">&gt;&gt;        +#elif SIZEOF_LONG_LONG == 8
</span><br>
<span class="quotelev2">&gt;&gt;         #define ev_uint64_t unsigned long long
</span><br>
<span class="quotelev2">&gt;&gt;         #define ev_int64_t long long
</span><br>
<span class="quotelev2">&gt;&gt;         #elif SIZEOF_LONG == 8
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;        Regards,
</span><br>
<span class="quotelev2">&gt;&gt;        Nadia
</span><br>
<span class="quotelev2">&gt;&gt;        --
</span><br>
<span class="quotelev2">&gt;&gt;        Nadia Derbey &lt;Nadia.Derbey_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;        _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;        devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;        devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;        <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Nadia Derbey &lt;Nadia.Derbey_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7512.php">Ralph Castain: "Re: [OMPI devel] Openmpi with slurm : salloc -c"</a>
<li><strong>Previous message:</strong> <a href="7510.php">Damien Guinier: "[OMPI devel] Openmpi with slurm : salloc -c"</a>
<li><strong>In reply to:</strong> <a href="7508.php">Nadia Derbey: "Re: [OMPI devel] typo in opal/event/evutil.h ?"</a>
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

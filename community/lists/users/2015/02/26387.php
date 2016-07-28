<?
$subject_val = "Re: [OMPI users] Why are the static libs different if compiled with or	without dynamic switch?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 24 16:09:40 2015" -->
<!-- isoreceived="20150224210940" -->
<!-- sent="Tue, 24 Feb 2015 21:09:38 +0000" -->
<!-- isosent="20150224210938" -->
<!-- name="Tom Wurgler" -->
<!-- email="twurgl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Why are the static libs different if compiled with or	without dynamic switch?" -->
<!-- id="1424812177880.48416_at_goodyear.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="D9CFE7C9-6F56-4C35-9774-1158CE62E4DF_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Why are the static libs different if compiled with or	without dynamic switch?<br>
<strong>From:</strong> Tom Wurgler (<em>twurgl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-24 16:09:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26388.php">Galloway, Jack D: "Re: [OMPI users] machinefile binding error"</a>
<li><strong>Previous message:</strong> <a href="26386.php">Rob Latham: "Re: [OMPI users] MPIIO and OrangeFS"</a>
<li><strong>In reply to:</strong> <a href="26384.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Why are the static libs different if compiled with or	without dynamic switch?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26389.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Why are the static libs different if compiled with or	without dynamic switch?"</a>
<li><strong>Reply:</strong> <a href="26389.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Why are the static libs different if compiled with or	without dynamic switch?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Did you mean --disable-shared instead of --disable-dlopen?

And I am still confused.  With &quot;--disable-shared&quot; I get a bigger static library than without it?

thanks
  

________________________________________
From: users &lt;users-bounces_at_[hidden]&gt; on behalf of Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
Sent: Tuesday, February 24, 2015 3:56 PM
To: Open MPI User's List
Subject: Re: [OMPI users] Why are the static libs different if compiled with or without dynamic switch?

The --disable-dlopen option actually snips out some code from the Open MPI code base: it disables a feature (and the code that goes along with it).

Hence, it makes sense that the resulting library would be a different size: there's actually less code compiled in it.


&gt; On Feb 24, 2015, at 2:45 PM, twurgl_at_[hidden] wrote:
&gt;
&gt;
&gt; I am setting up Openmpi 1.8.4.  The first time I compiled, I had the following:
&gt;
&gt; version=1.8.4.I1404211913
&gt; ./configure \
&gt;    --disable-vt \
&gt;    --prefix=/apps/share/openmpi/$version \
&gt;    --disable-shared \
&gt;    --enable-static \
&gt;    --with-verbs \
&gt;    --enable-mpirun-prefix-by-default \
&gt;    --with-memory-manager=none \
&gt;    --with-hwloc \
&gt;    --with-lsf=/apps/share/LSF/9.1.3/9.1 \
&gt;    --with-lsf-libdir=/apps/share/LSF/9.1.3/9.1/linux2.6-glibc2.3-x86_64/lib \
&gt;    --with-wrapper-cflags=&quot;-shared-intel&quot; \
&gt;    --with-wrapper-cxxflags=&quot;-shared-intel&quot; \
&gt;    --with-wrapper-ldflags=&quot;-shared-intel&quot; \
&gt;    --with-wrapper-fcflags=&quot;-shared-intel&quot; \
&gt;    --enable-mpi-ext
&gt;
&gt; And when installed I get (as a sample):
&gt;
&gt;  -rw-r--r-- 1 tommy 460g3 6881702 Feb 19 14:58 libmpi.a
&gt;
&gt; Now the second time I install, I had the same as above for the configure, but
&gt; this time I took out the &quot;--disable-shared&quot; option.
&gt;
&gt; and again, as a sample
&gt;
&gt;  -rw-r--r-- 1 tommy 460g3 6641598 Feb 24 13:53 libmpi.a
&gt;
&gt; Can someone tell me why the static libs are different (sizes) when compiling or
&gt; not compiling the dynamic ones?  Seems to me that static ones should be
&gt; identical.  Is this an issue?
&gt;
&gt; thanks for any info
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/02/26381.php">http://www.open-mpi.org/community/lists/users/2015/02/26381.php</a>


--
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>

_______________________________________________
users mailing list
users_at_[hidden]
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/02/26384.php">http://www.open-mpi.org/community/lists/users/2015/02/26384.php</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26388.php">Galloway, Jack D: "Re: [OMPI users] machinefile binding error"</a>
<li><strong>Previous message:</strong> <a href="26386.php">Rob Latham: "Re: [OMPI users] MPIIO and OrangeFS"</a>
<li><strong>In reply to:</strong> <a href="26384.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Why are the static libs different if compiled with or	without dynamic switch?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26389.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Why are the static libs different if compiled with or	without dynamic switch?"</a>
<li><strong>Reply:</strong> <a href="26389.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Why are the static libs different if compiled with or	without dynamic switch?"</a>
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

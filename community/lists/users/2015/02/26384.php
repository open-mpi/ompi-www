<?
$subject_val = "Re: [OMPI users] Why are the static libs different if compiled with or	without dynamic switch?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 24 15:56:34 2015" -->
<!-- isoreceived="20150224205634" -->
<!-- sent="Tue, 24 Feb 2015 20:56:33 +0000" -->
<!-- isosent="20150224205633" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Why are the static libs different if compiled with or	without dynamic switch?" -->
<!-- id="D9CFE7C9-6F56-4C35-9774-1158CE62E4DF_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="y9b385vxfe8.fsf_at_rds4020.akr.goodyear.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-24 15:56:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26385.php">Ralph Castain: "Re: [OMPI users] machinefile binding error"</a>
<li><strong>Previous message:</strong> <a href="26383.php">Galloway, Jack D: "[OMPI users] machinefile binding error"</a>
<li><strong>In reply to:</strong> <a href="26381.php">twurgl_at_[hidden]: "[OMPI users] Why are the static libs different if compiled with or without dynamic switch?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26387.php">Tom Wurgler: "Re: [OMPI users] Why are the static libs different if compiled with or	without dynamic switch?"</a>
<li><strong>Reply:</strong> <a href="26387.php">Tom Wurgler: "Re: [OMPI users] Why are the static libs different if compiled with or	without dynamic switch?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The --disable-dlopen option actually snips out some code from the Open MPI code base: it disables a feature (and the code that goes along with it).
<br>
<p>Hence, it makes sense that the resulting library would be a different size: there's actually less code compiled in it.
<br>
<p><p><span class="quotelev1">&gt; On Feb 24, 2015, at 2:45 PM, twurgl_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am setting up Openmpi 1.8.4.  The first time I compiled, I had the following:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; version=1.8.4.I1404211913
</span><br>
<span class="quotelev1">&gt; ./configure \
</span><br>
<span class="quotelev1">&gt;    --disable-vt \
</span><br>
<span class="quotelev1">&gt;    --prefix=/apps/share/openmpi/$version \
</span><br>
<span class="quotelev1">&gt;    --disable-shared \
</span><br>
<span class="quotelev1">&gt;    --enable-static \
</span><br>
<span class="quotelev1">&gt;    --with-verbs \
</span><br>
<span class="quotelev1">&gt;    --enable-mpirun-prefix-by-default \
</span><br>
<span class="quotelev1">&gt;    --with-memory-manager=none \
</span><br>
<span class="quotelev1">&gt;    --with-hwloc \
</span><br>
<span class="quotelev1">&gt;    --with-lsf=/apps/share/LSF/9.1.3/9.1 \
</span><br>
<span class="quotelev1">&gt;    --with-lsf-libdir=/apps/share/LSF/9.1.3/9.1/linux2.6-glibc2.3-x86_64/lib \
</span><br>
<span class="quotelev1">&gt;    --with-wrapper-cflags=&quot;-shared-intel&quot; \
</span><br>
<span class="quotelev1">&gt;    --with-wrapper-cxxflags=&quot;-shared-intel&quot; \
</span><br>
<span class="quotelev1">&gt;    --with-wrapper-ldflags=&quot;-shared-intel&quot; \
</span><br>
<span class="quotelev1">&gt;    --with-wrapper-fcflags=&quot;-shared-intel&quot; \
</span><br>
<span class="quotelev1">&gt;    --enable-mpi-ext
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And when installed I get (as a sample): 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  -rw-r--r-- 1 tommy 460g3 6881702 Feb 19 14:58 libmpi.a
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now the second time I install, I had the same as above for the configure, but
</span><br>
<span class="quotelev1">&gt; this time I took out the &quot;--disable-shared&quot; option.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and again, as a sample 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  -rw-r--r-- 1 tommy 460g3 6641598 Feb 24 13:53 libmpi.a
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can someone tell me why the static libs are different (sizes) when compiling or
</span><br>
<span class="quotelev1">&gt; not compiling the dynamic ones?  Seems to me that static ones should be
</span><br>
<span class="quotelev1">&gt; identical.  Is this an issue?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; thanks for any info
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/02/26381.php">http://www.open-mpi.org/community/lists/users/2015/02/26381.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26385.php">Ralph Castain: "Re: [OMPI users] machinefile binding error"</a>
<li><strong>Previous message:</strong> <a href="26383.php">Galloway, Jack D: "[OMPI users] machinefile binding error"</a>
<li><strong>In reply to:</strong> <a href="26381.php">twurgl_at_[hidden]: "[OMPI users] Why are the static libs different if compiled with or without dynamic switch?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26387.php">Tom Wurgler: "Re: [OMPI users] Why are the static libs different if compiled with or	without dynamic switch?"</a>
<li><strong>Reply:</strong> <a href="26387.php">Tom Wurgler: "Re: [OMPI users] Why are the static libs different if compiled with or	without dynamic switch?"</a>
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

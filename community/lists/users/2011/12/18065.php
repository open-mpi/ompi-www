<?
$subject_val = "Re: [OMPI users] MPI 2 support in sm btl";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 28 10:50:24 2011" -->
<!-- isoreceived="20111228155024" -->
<!-- sent="Wed, 28 Dec 2011 14:58:16 +0100" -->
<!-- isosent="20111228135816" -->
<!-- name="Sabela Ramos Garea" -->
<!-- email="sabelaraga_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI 2 support in sm btl" -->
<!-- id="CANtw=atnJwvv_BhBQk8G-MMDQwm5i93kRi2xs5dC4iagEw7pEg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="0D1C8B0F-6DE9-4AF5-B288-28A5FD1C89E8_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI 2 support in sm btl<br>
<strong>From:</strong> Sabela Ramos Garea (<em>sabelaraga_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-28 08:58:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18066.php">Shiqing Fan: "Re: [OMPI users] OBJ_CLASS_INSTANCE error: initializer element is not constant - Windows 7 64 bit mingw-w64 4.6.3"</a>
<li><strong>Previous message:</strong> <a href="18064.php">Ralph Castain: "Re: [OMPI users] Openmpi performance issue"</a>
<li><strong>In reply to:</strong> <a href="17992.php">Jeff Squyres: "Re: [OMPI users] MPI 2 support in sm btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/01/18090.php">Jeff Squyres: "[OMPI users] MPI-2 in MX (was: MPI 2 support in sm btl)"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/01/18090.php">Jeff Squyres: "[OMPI users] MPI-2 in MX (was: MPI 2 support in sm btl)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for your answers.
<br>
Is there a similar issue with mx BTL? I mean, using the mx BTL, is it
<br>
possible to reach a parent job from a spawned process?
<br>
<p>Thanks again! :-)
<br>
<p>El 16 de diciembre de 2011 15:08, Jeff Squyres &lt;jsquyres_at_[hidden]&gt;escribi&#243;:
<br>
<p><span class="quotelev1">&gt; On Dec 14, 2011, at 4:01 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; As far as I know, there is no support for some MPI-2 features in the
</span><br>
<span class="quotelev1">&gt; shared memory BTL as dynamic process creation or port connection. Are you
</span><br>
<span class="quotelev1">&gt; planning to include this support?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; It depends on what exactly you mean. Dynamically spawned processes do
</span><br>
<span class="quotelev1">&gt; use the shared memory BTL between themselves, but not with the processes in
</span><br>
<span class="quotelev1">&gt; their parent job. We plan to support that as well at some future time.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ...when enough people ask for it.  :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We've talked about supporting this for a long time, but to be blunt, there
</span><br>
<span class="quotelev1">&gt; hasn't been enough demand for it to justify spending the time to figure out
</span><br>
<span class="quotelev1">&gt; all the issues and implement it properly.  :-(
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Patches would be welcome, though!  :-)
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18065/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18066.php">Shiqing Fan: "Re: [OMPI users] OBJ_CLASS_INSTANCE error: initializer element is not constant - Windows 7 64 bit mingw-w64 4.6.3"</a>
<li><strong>Previous message:</strong> <a href="18064.php">Ralph Castain: "Re: [OMPI users] Openmpi performance issue"</a>
<li><strong>In reply to:</strong> <a href="17992.php">Jeff Squyres: "Re: [OMPI users] MPI 2 support in sm btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/01/18090.php">Jeff Squyres: "[OMPI users] MPI-2 in MX (was: MPI 2 support in sm btl)"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/01/18090.php">Jeff Squyres: "[OMPI users] MPI-2 in MX (was: MPI 2 support in sm btl)"</a>
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

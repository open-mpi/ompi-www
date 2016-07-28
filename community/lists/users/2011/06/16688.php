<?
$subject_val = "Re: [OMPI users] ifort 12.0.4 install problem";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  7 08:29:17 2011" -->
<!-- isoreceived="20110607122917" -->
<!-- sent="Tue, 7 Jun 2011 14:29:12 +0200" -->
<!-- isosent="20110607122912" -->
<!-- name="Virginie trinite" -->
<!-- email="vtrinite_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ifort 12.0.4 install problem" -->
<!-- id="BANLkTimGG5Ej0=eTNQbzYN__OR3PHikRVw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="0603EE7C-0C75-4248-803A-6CED93C4FC32_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] ifort 12.0.4 install problem<br>
<strong>From:</strong> Virginie trinite (<em>vtrinite_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-07 08:29:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16689.php">Jeff Squyres: "Re: [OMPI users] Problem with MPI_Intercomm_create"</a>
<li><strong>Previous message:</strong> <a href="16687.php">Troels Haugboelle: "Re: [OMPI users] parallel I/O on 64-bit indexed arays"</a>
<li><strong>In reply to:</strong> <a href="16682.php">Jeff Squyres: "Re: [OMPI users] ifort 12.0.4 install problem"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for your reply
<br>
In fact as you said it was a strange problem with the .bashrc
<br>
with sudo make install I have the error, but with sudo bash and then
<br>
make install the error disappears.
<br>
I did'nt understand why....
<br>
Everything seems OK now, no more problem at runtime.
<br>
<p>Thanks
<br>
<p><p>2011/6/7 Jeff Squyres &lt;jsquyres_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt; On Jun 6, 2011, at 10:43 AM, Virginie trinite wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I try to compile open-mpi with ifort 12.0.4. My system is ubuntu
</span><br>
<span class="quotelev2">&gt;&gt; lucid. Previous intallation with ifort 11.1 was fine.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; configure and make all seems to work well, but make install report an error:
</span><br>
<span class="quotelev2">&gt;&gt; libtool: line 7847: icc: command not found
</span><br>
<span class="quotelev2">&gt;&gt; libtool: install: error: relink `lipopen-rte.la' with the above
</span><br>
<span class="quotelev2">&gt;&gt; command before installing it
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I want to underline that icc is a knom command for bash.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Somehow it became unknown. &#160;Is your PATH being reset somehow? &#160;Or perhaps if your .bashrc resetting your PATH such that even if &quot;which icc&quot; finds it at the shell prompt, if sub-shells have your .bashrc invoked, the PATH gets reset (or the icc settings don't get inherited properly), and therefore it becomes unknown...?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have check the FAQ and it seems to me that the problem is more like
</span><br>
<span class="quotelev2">&gt;&gt; the one report for IBM compiler. So I try with
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm a little confused why you're mentioning the IBM compiler...? &#160;This issue is a shell/build issue (I assume...? &#160;You only sent a few lines from the output, so I can't tell exactly where the error is occurring).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; configure CC=icc CXX=icpc F77=ifort FC=ifort --disable-shared --enable-static
</span><br>
<span class="quotelev2">&gt;&gt; Now the install finish without error, but when I try to run mpi I have
</span><br>
<span class="quotelev2">&gt;&gt; error message:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now I'm very confused. &#160;:-\
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you please send all the information listed here:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160; &#160;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This will help me understand what the problem is and what you tried to do to fix it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks.
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16689.php">Jeff Squyres: "Re: [OMPI users] Problem with MPI_Intercomm_create"</a>
<li><strong>Previous message:</strong> <a href="16687.php">Troels Haugboelle: "Re: [OMPI users] parallel I/O on 64-bit indexed arays"</a>
<li><strong>In reply to:</strong> <a href="16682.php">Jeff Squyres: "Re: [OMPI users] ifort 12.0.4 install problem"</a>
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

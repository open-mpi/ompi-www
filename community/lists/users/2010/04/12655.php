<?
$subject_val = "Re: [OMPI users] openMPI configure/Installing problem on Macwithgnu-gcc-4.4.3 / gnu-gcc-4.5";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 16 12:05:16 2010" -->
<!-- isoreceived="20100416160516" -->
<!-- sent="Fri, 16 Apr 2010 12:05:11 -0400" -->
<!-- isosent="20100416160511" -->
<!-- name="Baowei Liu" -->
<!-- email="bliu520_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openMPI configure/Installing problem on Macwithgnu-gcc-4.4.3 / gnu-gcc-4.5" -->
<!-- id="m2na5d7282e1004160905v7225e18i88d9099cd13d3a2d_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="D8C3B345-360F-4578-870A-C91B3E64DC49_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] openMPI configure/Installing problem on Macwithgnu-gcc-4.4.3 / gnu-gcc-4.5<br>
<strong>From:</strong> Baowei Liu (<em>bliu520_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-16 12:05:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12656.php">Mario Ogrizek: "[OMPI users] Fwd:  Open MPI v1.4 cant find default hostfile"</a>
<li><strong>Previous message:</strong> <a href="12654.php">Ralph Castain: "Re: [OMPI users] Open MPI v1.4 cant find default hostfile"</a>
<li><strong>In reply to:</strong> <a href="12651.php">Jeff Squyres: "Re: [OMPI users] openMPI configure/Installing problem on Macwithgnu-gcc-4.4.3 / gnu-gcc-4.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12692.php">Jeff Squyres: "Re: [OMPI users] openMPI configure/Installing problem onMacwithgnu-gcc-4.4.3 / gnu-gcc-4.5"</a>
<li><strong>Reply:</strong> <a href="12692.php">Jeff Squyres: "Re: [OMPI users] openMPI configure/Installing problem onMacwithgnu-gcc-4.4.3 / gnu-gcc-4.5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, Apr 16, 2010 at 6:28 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Apr 15, 2010, at 10:09 PM, Baowei Liu wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks a lot for your reply, Jeff!  I think I figure out why I got this
</span><br>
<span class="quotelev1">&gt; trouble but am still looking for a way to work around it. The Mac I have has
</span><br>
<span class="quotelev1">&gt; a 64-bit processor but its kernel is 32-bit. When I installed gnu-gcc, it
</span><br>
<span class="quotelev1">&gt; identified the architecture as x86_64--I cannot install it if I force it to
</span><br>
<span class="quotelev1">&gt; be i386. But the OMPI treat the arch as i386. If I try to force it to be
</span><br>
<span class="quotelev1">&gt; x86_64, I got the problem I mentioned before....
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm not sure I understand the issue -- are you saying that gcc can't create
</span><br>
<span class="quotelev1">&gt; executables?  I.e., does this not work:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; % cat &gt; hello.c &lt;&lt;EOF
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; int main(int argc, char* argv[]) {
</span><br>
<span class="quotelev1">&gt;    printf(&quot;Hello world\n&quot;);
</span><br>
<span class="quotelev1">&gt;    return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; EOF
</span><br>
<span class="quotelev1">&gt; % gcc hello.c -o hello
</span><br>
<span class="quotelev1">&gt; % ./hello
</span><br>
<span class="quotelev1">&gt; Hello world
</span><br>
<span class="quotelev1">&gt; %
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If that works, then you should just be able to do a default configure/make
</span><br>
<span class="quotelev1">&gt; of Open MPI.  If it doesn't work -- e.g., if the &quot;hello&quot; executable that is
</span><br>
<span class="quotelev1">&gt; produced is not runnable on your machine, then you probably need to supply
</span><br>
<span class="quotelev1">&gt; some additional flags to gcc.  Once you figure out what those flags are,
</span><br>
<span class="quotelev1">&gt; pass the same flags to Open MPI's configure.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'd be pretty surprised if the default gcc build doesn't work for you
</span><br>
<span class="quotelev1">&gt; (e.g., the &quot;hello world&quot; example, above), though.
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
<p>Thanks for your reply. Sorry I didn't make it clear..... When I run
<br>
config.guess of gcc, it gives me the x86_64 system. But when I run &quot;uname
<br>
-a&quot;, it says it's i386. I think that's the reason OMPI complains about &quot;more
<br>
than one -arch option (not allowed, use cc(1) instead)&quot;.
<br>
<p>The new gcc can create executibals. I use it to compile my own c++ programs.
<br>
And I don't need special flags. I need a higher version of gcc than the
<br>
default one just because I cannot build a package (QE:Quantum Espresso) with
<br>
the default gcc -- QE uses OMPI.  I can install OMPI with the default gcc.
<br>
I tried this:
<br>
<p>1. install OMPI with default gcc and OMPI works fine.
<br>
2. install the new gcc and install the QE package, successfully.
<br>
3. mpirun stops working with eorror&quot; cannot initialize&quot;
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12655/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12656.php">Mario Ogrizek: "[OMPI users] Fwd:  Open MPI v1.4 cant find default hostfile"</a>
<li><strong>Previous message:</strong> <a href="12654.php">Ralph Castain: "Re: [OMPI users] Open MPI v1.4 cant find default hostfile"</a>
<li><strong>In reply to:</strong> <a href="12651.php">Jeff Squyres: "Re: [OMPI users] openMPI configure/Installing problem on Macwithgnu-gcc-4.4.3 / gnu-gcc-4.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12692.php">Jeff Squyres: "Re: [OMPI users] openMPI configure/Installing problem onMacwithgnu-gcc-4.4.3 / gnu-gcc-4.5"</a>
<li><strong>Reply:</strong> <a href="12692.php">Jeff Squyres: "Re: [OMPI users] openMPI configure/Installing problem onMacwithgnu-gcc-4.4.3 / gnu-gcc-4.5"</a>
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

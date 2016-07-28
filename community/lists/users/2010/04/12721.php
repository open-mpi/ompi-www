<?
$subject_val = "Re: [OMPI users] openMPI configure/InstallingproblemonMacwithgnu-gcc-4.4.3 / gnu-gcc-4.5";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 20 23:17:13 2010" -->
<!-- isoreceived="20100421031713" -->
<!-- sent="Tue, 20 Apr 2010 23:17:09 -0400" -->
<!-- isosent="20100421031709" -->
<!-- name="Baowei Liu" -->
<!-- email="bliu520_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openMPI configure/InstallingproblemonMacwithgnu-gcc-4.4.3 / gnu-gcc-4.5" -->
<!-- id="v2ha5d7282e1004202017obd90f658u8fc9cd4998b1f01_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="DF4EC540-734D-4111-A663-CB28C021A9BB_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] openMPI configure/InstallingproblemonMacwithgnu-gcc-4.4.3 / gnu-gcc-4.5<br>
<strong>From:</strong> Baowei Liu (<em>bliu520_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-20 23:17:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12722.php">Shiqing Fan: "Re: [OMPI users] import/export issues on Windows"</a>
<li><strong>Previous message:</strong> <a href="12720.php">Jeff Squyres: "Re: [OMPI users] unresolved symbol mca_base_param_reg_int"</a>
<li><strong>In reply to:</strong> <a href="12719.php">Jeff Squyres: "Re: [OMPI users] openMPI configure/InstallingproblemonMacwithgnu-gcc-4.4.3 / gnu-gcc-4.5"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you so much, Jeff.  It works!!!
<br>
<p>I followed instructions in INSTALL file to make a new directory ./build. But
<br>
when I configured it in this new directory, I got &quot;permission denied&quot; error.
<br>
That's why I used &quot;sudo&quot;.
<br>
<p>Now I try to configure it directly under the openmpi-X.Y.Z directory:
<br>
<p>./configure --prefix=.../openmpi
<br>
make all
<br>
sudo make install
<br>
<p>test with mpi_helloworld.f90, it works just fine.
<br>
<p>Thanks again for your time and help!
<br>
<p>On Tue, Apr 20, 2010 at 7:38 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Apr 20, 2010, at 7:25 PM, Baowei Liu wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks a lot, Jeff. I'll try what you told me and let you know the
</span><br>
<span class="quotelev1">&gt; result.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Someone else pointed out to me off-list that you're using &quot;sudo&quot; for make
</span><br>
<span class="quotelev1">&gt; all -- do you need to?  Most people build as an unprivileged user and then
</span><br>
<span class="quotelev1">&gt; only use &quot;sudo&quot; for &quot;make install&quot;.  I don't know if sudo's environment
</span><br>
<span class="quotelev1">&gt; would be mucking you up so deep in the build, but it's worth trying without
</span><br>
<span class="quotelev1">&gt; it...?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Additionally, they pointed out that if you pass &quot;-v&quot; to CFLAGS (or just add
</span><br>
<span class="quotelev1">&gt; it to the cut-n-paste of this particular command line), you should see all
</span><br>
<span class="quotelev1">&gt; the commands that gcc is invoking under the covers.  That might be useful to
</span><br>
<span class="quotelev1">&gt; see what's going on in this specific command line.
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12721/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12722.php">Shiqing Fan: "Re: [OMPI users] import/export issues on Windows"</a>
<li><strong>Previous message:</strong> <a href="12720.php">Jeff Squyres: "Re: [OMPI users] unresolved symbol mca_base_param_reg_int"</a>
<li><strong>In reply to:</strong> <a href="12719.php">Jeff Squyres: "Re: [OMPI users] openMPI configure/InstallingproblemonMacwithgnu-gcc-4.4.3 / gnu-gcc-4.5"</a>
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

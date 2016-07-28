<?
$subject_val = "Re: [OMPI users] problems compiling svn-version";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  7 05:04:10 2007" -->
<!-- isoreceived="20071107100410" -->
<!-- sent="Wed, 7 Nov 2007 11:03:56 +0100" -->
<!-- isosent="20071107100356" -->
<!-- name="Adrian Knoth" -->
<!-- email="adi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problems compiling svn-version" -->
<!-- id="20071107100356.GX6390_at_ltw.loris.tv" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20071107094524.GC17548_at_dbmail.dk" -->
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
<strong>From:</strong> Adrian Knoth (<em>adi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-07 05:03:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4429.php">Karsten Bolding: "Re: [OMPI users] problems compiling svn-version"</a>
<li><strong>Previous message:</strong> <a href="4427.php">Karsten Bolding: "[OMPI users] problems compiling svn-version"</a>
<li><strong>In reply to:</strong> <a href="4427.php">Karsten Bolding: "[OMPI users] problems compiling svn-version"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4429.php">Karsten Bolding: "Re: [OMPI users] problems compiling svn-version"</a>
<li><strong>Reply:</strong> <a href="4429.php">Karsten Bolding: "Re: [OMPI users] problems compiling svn-version"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Nov 07, 2007 at 09:45:24AM +0000, Karsten Bolding wrote:
<br>
<p><span class="quotelev1">&gt; Hello
</span><br>
<p>Hi!
<br>
<p><span class="quotelev1">&gt; Are there any known issues with ubuntus version of libtool. When I run
</span><br>
<p>Libtool is always an issue ;) To circumvent this, we have a Makefile
<br>
fetching the right versions, compiling the whole autotools chain,
<br>
prepends the new PATH and then compiles OMPI.
<br>
<p>Place the attached Makefile as i.e. /tmp/my-ompi/Makefile, get the svn
<br>
snapshot into /tmp/my-ompi/ompi and just run &quot;make&quot; in /tmp/my-ompi/.
<br>
<p>Over here, it looks like this:
<br>
<p>adi_at_ipc654:/var/tmp/meta-ompi/trunk$ ls
<br>
Makefile  Rakefile  cc.build.job  cunit  ompi  test  tool  unittests
<br>
<p>You don't need to care about the other files, just to outline where to
<br>
place the OMPI source.
<br>
<p><p>You might want to change CONFIGURE_FLAGS in the Makefile, you'd probably
<br>
comment out the debug line and go for the second variant.
<br>
<p><p><p>HTH
<br>
<p><pre>
-- 
Cluster and Metacomputing Working Group
Friedrich-Schiller-Universit&#228;t Jena, Germany
private: <a href="http://adi.thur.de">http://adi.thur.de</a>

</pre>
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4428/Makefile">Makefile</a>
</ul>
<!-- attachment="Makefile" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4429.php">Karsten Bolding: "Re: [OMPI users] problems compiling svn-version"</a>
<li><strong>Previous message:</strong> <a href="4427.php">Karsten Bolding: "[OMPI users] problems compiling svn-version"</a>
<li><strong>In reply to:</strong> <a href="4427.php">Karsten Bolding: "[OMPI users] problems compiling svn-version"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4429.php">Karsten Bolding: "Re: [OMPI users] problems compiling svn-version"</a>
<li><strong>Reply:</strong> <a href="4429.php">Karsten Bolding: "Re: [OMPI users] problems compiling svn-version"</a>
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

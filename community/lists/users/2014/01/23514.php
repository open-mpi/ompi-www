<?
$subject_val = "Re: [OMPI users] Can't build openmpi-1.6.5 with latest FCA 2.5 release.";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 31 09:06:55 2014" -->
<!-- isoreceived="20140131140655" -->
<!-- sent="Fri, 31 Jan 2014 16:06:53 +0200" -->
<!-- isosent="20140131140653" -->
<!-- name="Mike Dubman" -->
<!-- email="miked_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Can't build openmpi-1.6.5 with latest FCA 2.5 release." -->
<!-- id="CAAO1KyaF1YMHeGfZ-ugW=41nRiXnrjYvV2D=Mnbzj0uchkLy4A_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="7F4B6BD1-FEA8-4089-A5FC-D6050DE23E44_at_umich.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Can't build openmpi-1.6.5 with latest FCA 2.5 release.<br>
<strong>From:</strong> Mike Dubman (<em>miked_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-31 09:06:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23515.php">Jiri Kraus: "Re: [OMPI users] Compiling OpenMPI with PGI pgc++"</a>
<li><strong>Previous message:</strong> <a href="23513.php">Siddhartha Jana: "Re: [OMPI users] Implementation of TCP v/s OpenIB (Eager and Rendezvous) protocols"</a>
<li><strong>In reply to:</strong> <a href="23511.php">Brock Palen: "[OMPI users] Can't build openmpi-1.6.5 with latest FCA 2.5 release."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/02/23620.php">Brock Palen: "Re: [OMPI users] Can't build openmpi-1.6.5 with latest FCA 2.5 release."</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/02/23620.php">Brock Palen: "Re: [OMPI users] Can't build openmpi-1.6.5 with latest FCA 2.5 release."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
Can it be that libibmad/libibumad installed on your system belongs to
<br>
previous mofed installation?
<br>
<p>Thanks
<br>
M.
<br>
On Jan 31, 2014 2:02 AM, &quot;Brock Palen&quot; &lt;brockp_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I grabbed the latest FCA release from Mellnox's website.  We have been
</span><br>
<span class="quotelev1">&gt; building against FCA 2.5 for a while, but it never worked right.  Today I
</span><br>
<span class="quotelev1">&gt; tried to build against the latest (version number was still 2.5, but I
</span><br>
<span class="quotelev1">&gt; think we have updated our OFED sense the last install).  We are running
</span><br>
<span class="quotelev1">&gt; MOFED 1.5.3-4.0.42
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1.6.5 configures fine against the old 2.5 fca library I have around (don't
</span><br>
<span class="quotelev1">&gt; recall what OFED it expected)  but the new one, which claims is for RHEL6.4
</span><br>
<span class="quotelev1">&gt; OFED 1.5.3-4.0.42,  fails in configure with:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /home/software/rhel6/fca/2.5-v2/lib/libfca.so: undefined reference to
</span><br>
<span class="quotelev1">&gt; `smp_mkey_set_at_IBMAD_1.3'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; libibmad is installed, but the symbol smp_mkey_set  is not defined in it.
</span><br>
<span class="quotelev1">&gt; IBMAD_1.3  is though.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any thought what may cause this?  As far as I know our MOFED is from
</span><br>
<span class="quotelev1">&gt; Mellnox and should match up fine to their release of FCA. So this has me
</span><br>
<span class="quotelev1">&gt; scratching my head.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brock Palen
</span><br>
<span class="quotelev1">&gt; www.umich.edu/~brockp
</span><br>
<span class="quotelev1">&gt; CAEN Advanced Computing
</span><br>
<span class="quotelev1">&gt; XSEDE Campus Champion
</span><br>
<span class="quotelev1">&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev1">&gt; (734)936-1985
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23514/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23515.php">Jiri Kraus: "Re: [OMPI users] Compiling OpenMPI with PGI pgc++"</a>
<li><strong>Previous message:</strong> <a href="23513.php">Siddhartha Jana: "Re: [OMPI users] Implementation of TCP v/s OpenIB (Eager and Rendezvous) protocols"</a>
<li><strong>In reply to:</strong> <a href="23511.php">Brock Palen: "[OMPI users] Can't build openmpi-1.6.5 with latest FCA 2.5 release."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/02/23620.php">Brock Palen: "Re: [OMPI users] Can't build openmpi-1.6.5 with latest FCA 2.5 release."</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/02/23620.php">Brock Palen: "Re: [OMPI users] Can't build openmpi-1.6.5 with latest FCA 2.5 release."</a>
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

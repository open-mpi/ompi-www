<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Apr 26 04:04:35 2007" -->
<!-- isoreceived="20070426080435" -->
<!-- sent="Thu, 26 Apr 2007 10:04:26 +0200" -->
<!-- isosent="20070426080426" -->
<!-- name="Andreas Kuntze" -->
<!-- email="kuntze_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openMPI over uDAPL doesn't work" -->
<!-- id="46305D0A.5020900_at_lfbs.rwth-aachen.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="462E1DFE.5010703_at_Sun.COM" -->
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
<strong>From:</strong> Andreas Kuntze (<em>kuntze_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-26 04:04:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3146.php">Peter Kjellstrom: "Re: [OMPI users] Call for Help: CPU topology needed!"</a>
<li><strong>Previous message:</strong> <a href="3144.php">Jeff Squyres: "Re: [OMPI users] Portland Group Compiler &quot;-Msignextend&quot; flag"</a>
<li><strong>In reply to:</strong> <a href="3129.php">Donald Kerr: "Re: [OMPI users] openMPI over uDAPL doesn't work"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3149.php">Donald Kerr: "Re: [OMPI users] openMPI over uDAPL doesn't work"</a>
<li><strong>Reply:</strong> <a href="3149.php">Donald Kerr: "Re: [OMPI users] openMPI over uDAPL doesn't work"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Linux you needn't initialise the dat registry. Your program prints: 
<br>
&quot;provider 1: OpenIB-cma&quot;. I successfully tested INTEL MPI  and  mvapich2 
<br>
with uDAPL .
<br>
<p>Andreas
<br>
<p>Donald Kerr wrote:
<br>
<span class="quotelev1">&gt; Andreas,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am going to guess at a minimum the interfaces are up and you can 
</span><br>
<span class="quotelev1">&gt; ping them.  On Solaris there is an additional step required and that 
</span><br>
<span class="quotelev1">&gt; is initializing the dat registry. If &quot;/usr/sbin/datadm -v&quot; does not 
</span><br>
<span class="quotelev1">&gt; show some driver output then you would need to run &quot;/usr/sbin/datadm 
</span><br>
<span class="quotelev1">&gt; -a /usr/share/dat/SUNWudaplt.conf&quot;. I don't know if there is an 
</span><br>
<span class="quotelev1">&gt; equivalent on Linux.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Attached is a simple udapl program which will check if the interfaces 
</span><br>
<span class="quotelev1">&gt; are available in the dat registry.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -DON
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3146.php">Peter Kjellstrom: "Re: [OMPI users] Call for Help: CPU topology needed!"</a>
<li><strong>Previous message:</strong> <a href="3144.php">Jeff Squyres: "Re: [OMPI users] Portland Group Compiler &quot;-Msignextend&quot; flag"</a>
<li><strong>In reply to:</strong> <a href="3129.php">Donald Kerr: "Re: [OMPI users] openMPI over uDAPL doesn't work"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3149.php">Donald Kerr: "Re: [OMPI users] openMPI over uDAPL doesn't work"</a>
<li><strong>Reply:</strong> <a href="3149.php">Donald Kerr: "Re: [OMPI users] openMPI over uDAPL doesn't work"</a>
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

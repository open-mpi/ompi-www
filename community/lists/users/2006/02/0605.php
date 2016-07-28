<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Feb  8 14:59:17 2006" -->
<!-- isoreceived="20060208195917" -->
<!-- sent="Wed, 08 Feb 2006 11:58:08 -0800" -->
<!-- isosent="20060208195808" -->
<!-- name="Jean-Christophe Hugly" -->
<!-- email="jice_at_[hidden]" -->
<!-- subject="[O-MPI users] direct openib btl and latency" -->
<!-- id="1139428688.1494.133.camel_at_jhugly.pantasys.com" -->
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
<strong>From:</strong> Jean-Christophe Hugly (<em>jice_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-02-08 14:58:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0606.php">Galen Shipman: "Re: [O-MPI users] direct openib btl and latency"</a>
<li><strong>Previous message:</strong> <a href="0604.php">Peter Beerli: "Re: [O-MPI users] problem running Migrate with open-MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0606.php">Galen Shipman: "Re: [O-MPI users] direct openib btl and latency"</a>
<li><strong>Reply:</strong> <a href="0606.php">Galen Shipman: "Re: [O-MPI users] direct openib btl and latency"</a>
<li><strong>Reply:</strong> <a href="0607.php">Galen Shipman: "Re: [O-MPI users] direct openib btl and latency"</a>
<li><strong>Maybe reply:</strong> <a href="0614.php">Galen Shipman: "Re: [O-MPI users] direct openib btl and latency"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi guys,
<br>
<p>Does someone know what the framework costs in term of latency ?
<br>
<p>Righ now the latency I get with the openib btl is not great: 5.35 us. I
<br>
was looking at what I could do to get it down. I tried to get openib be
<br>
the only btl but the build process refused.
<br>
<p>On the other hand I am not sure it could even work at all, as whenever I
<br>
tried at run-time to limit the list to just one transport (be it tcp or
<br>
openib, btw), mpi apps would not start.
<br>
<p>Either way, I'm curious if it's even worth trying and if there's other
<br>
cuts that can be made to shave off one us or two (ok, I'l settle for
<br>
1.5 :-) )
<br>
<p>Any advice ?
<br>
<p><pre>
-- 
Jean-Christophe Hugly &lt;jice_at_[hidden]&gt;
PANTA
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0606.php">Galen Shipman: "Re: [O-MPI users] direct openib btl and latency"</a>
<li><strong>Previous message:</strong> <a href="0604.php">Peter Beerli: "Re: [O-MPI users] problem running Migrate with open-MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0606.php">Galen Shipman: "Re: [O-MPI users] direct openib btl and latency"</a>
<li><strong>Reply:</strong> <a href="0606.php">Galen Shipman: "Re: [O-MPI users] direct openib btl and latency"</a>
<li><strong>Reply:</strong> <a href="0607.php">Galen Shipman: "Re: [O-MPI users] direct openib btl and latency"</a>
<li><strong>Maybe reply:</strong> <a href="0614.php">Galen Shipman: "Re: [O-MPI users] direct openib btl and latency"</a>
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

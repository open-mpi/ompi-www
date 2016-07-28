<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Oct 24 09:35:44 2006" -->
<!-- isoreceived="20061024133544" -->
<!-- sent="Tue, 24 Oct 2006 09:35:25 -0400" -->
<!-- isosent="20061024133525" -->
<!-- name="Tony Ladd" -->
<!-- email="ladd_at_[hidden]" -->
<!-- subject="[OMPI users] Dual Gigabit ethernet support" -->
<!-- id="01fe01c6f771$42e33730$ca79e30a_at_ladd02" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Tony Ladd (<em>ladd_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-24 09:35:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2043.php">Durga Choudhury: "Re: [OMPI users] Dual Gigabit ethernet support"</a>
<li><strong>Previous message:</strong> <a href="2041.php">Jeff Squyres: "Re: [OMPI users] quick patch to buildrpm.sh to enable building on SuSE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2043.php">Durga Choudhury: "Re: [OMPI users] Dual Gigabit ethernet support"</a>
<li><strong>Reply:</strong> <a href="2043.php">Durga Choudhury: "Re: [OMPI users] Dual Gigabit ethernet support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Lisandro
<br>
<p>I use my own network testing program; I wrote it some time ago because
<br>
Netpipe only tested 1-way rates at that point. I havent tried IMB but I
<br>
looked at the source and its very similar to what I do. 1) set up buffers
<br>
with data. 2) Start clock 3) Call MPI_xxx N times 4) Stop clock 5) calculate
<br>
rate. IMB tests more things than I do; I just focused on the calls I use
<br>
(send recv allreduce). I have done a lot of testing of hardware and
<br>
software. I will have some web pages posted soon. I will put a note here
<br>
when I do. But a couple of things.
<br>
A) I have found the switch is the biggest discriminant if you want to run
<br>
HPC under Gigabit ethernet. Most GigE switches choke when all the ports are
<br>
being used at once. This is the usual HPC pattern, but not of a typical
<br>
network, which is what these switches are geared towards. The one exception
<br>
I have found is the Extreme Networks x450a-48t. In some test patterns I
<br>
found it to be 500 times faster (not a typo) than the s400-48t, which is its
<br>
predecessor. I have tested several GigE switches (Extreme, Force10, HP,
<br>
Asante) and the x450 is the only one that copes with high traffic loads in
<br>
all port configurations. Its expensive for a GigE switch (~$6500) but worth
<br>
it in my opinion if you want to do HPC. Its still much cheaper than
<br>
Infiniband.
<br>
B) You have to test the switch in different port configurations-a random
<br>
ring of SendRecv is good for this. I don't think IMB has it in its test
<br>
suite but its easy to program. Or you can change the order of nodes in the
<br>
machinefile to force unfavorable port assignments. A step of 12 is a good
<br>
test since many GigE switches use 12-port ASICS and this forces all the
<br>
traffic onto the backplane. On the Summit 400 this causes it to more or less
<br>
stop working-rates drop to a few Kbytes/sec along each wire, but the x450
<br>
has no problem with the same test. You need to know how your nodes are wired
<br>
to the switch to do this test.
<br>
C) GAMMA is an extraordinary accomplishment in my view; in a number of tests
<br>
with codes like DLPOLY, GROMACS, VASP it can be 2-3 times the speed of TCP
<br>
based programs with 64 cpus. In many instances I get comparable (and
<br>
occasionally better) scaling than with the university HPC system which has
<br>
an Infiniband interconnect. Note I am not saying GigE is comparable to IB;
<br>
but that a typical HPC setup with nodes scattered all over a fat tree
<br>
topology (including oversubscription of the links and switches) is enough of
<br>
a minus that an optimized GigE set up can compete; at least up to 48 nodes
<br>
(96 cpus in our case). I have worked with Giuseppe Ciaccio for the past 9
<br>
months eradicating some obscure bugs in GAMMA. I find them; he fixes them.
<br>
We have GAMMA running on 48 nodes quite reliably but there are still many
<br>
issues to address. GAMMA is very much a research tool-there are a number of
<br>
features(?) which would hinder it being used in an HPC environment.
<br>
Basically Giuseppe needs help with development. Any volunteers? 
<br>
<p>Tony
<br>
-------------------------------
<br>
Tony Ladd
<br>
Professor, Chemical Engineering
<br>
University of Florida
<br>
PO Box 116005
<br>
Gainesville, FL 32611-6005
<br>
<p>Tel: 352-392-6509
<br>
FAX: 352-392-9513
<br>
Email: tladd_at_[hidden]
<br>
Web: <a href="http://ladd.che.ufl.edu">http://ladd.che.ufl.edu</a> 
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2043.php">Durga Choudhury: "Re: [OMPI users] Dual Gigabit ethernet support"</a>
<li><strong>Previous message:</strong> <a href="2041.php">Jeff Squyres: "Re: [OMPI users] quick patch to buildrpm.sh to enable building on SuSE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2043.php">Durga Choudhury: "Re: [OMPI users] Dual Gigabit ethernet support"</a>
<li><strong>Reply:</strong> <a href="2043.php">Durga Choudhury: "Re: [OMPI users] Dual Gigabit ethernet support"</a>
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

<?
$subject_val = "[OMPI devel] RFC: how should Open MPI handle link-local addresses";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 21 04:24:27 2015" -->
<!-- isoreceived="20150521082427" -->
<!-- sent="Thu, 21 May 2015 17:24:30 +0900" -->
<!-- isosent="20150521082430" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: how should Open MPI handle link-local addresses" -->
<!-- id="555D963E.7000802_at_rist.or.jp" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: how should Open MPI handle link-local addresses<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-21 04:24:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17443.php">Ralph Castain: "Re: [OMPI devel] RFC: how should Open MPI handle link-local addresses"</a>
<li><strong>Previous message:</strong> <a href="17441.php">George Bosilca: "Re: [OMPI devel] Open MPI collectives algorithm selection"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17443.php">Ralph Castain: "Re: [OMPI devel] RFC: how should Open MPI handle link-local addresses"</a>
<li><strong>Reply:</strong> <a href="17443.php">Ralph Castain: "Re: [OMPI devel] RFC: how should Open MPI handle link-local addresses"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Folks,
<br>
<p>this RFC is a follow-up of
<br>
&nbsp;&nbsp;* issue 585 <a href="https://github.com/open-mpi/ompi/issues/585">https://github.com/open-mpi/ompi/issues/585</a>
<br>
&nbsp;&nbsp;* related PR 591 <a href="https://github.com/open-mpi/ompi/pull/591">https://github.com/open-mpi/ompi/pull/591</a>
<br>
<p>As some of you might have already noticed, Open MPI fails if configure'd 
<br>
with --enable-ipv6 and ipv6 interfaces are found on the system.
<br>
<p>The root cause is IPv6 link-local addresses are not (yet) correctly handled.
<br>
<p>Wikipedia has a good pages about link-locak addresses at 
<br>
<a href="http://en.wikipedia.org/wiki/Link-local_address">http://en.wikipedia.org/wiki/Link-local_address</a>
<br>
<p>basically, in IPv4, link-local addresses are 169.254.0.0/16 and should 
<br>
be used only when zeroconf'ing the IP stack.
<br>
on the other hand, IPv6 are fe80::/10, are also used when zeroconf'ing, 
<br>
but must always be present, in addition of a non link-local address.
<br>
<p>Currently, these addresses are considered as regular addresses, but the 
<br>
tcp btl (and probably oob tcp too) do not know how to handle them, and 
<br>
that causes OpenMPI crash.
<br>
<p>I can think of three options :
<br>
1) it is very unlikely a user wants Open MPI use a link-local address, 
<br>
so link-local addresses should be simply skipped
<br>
2) each module should decide if/how to handle link-local addresses
<br>
3) all modules should correctly handle link-local addresses (that 
<br>
requires some extra devel)
<br>
<p>as far as i am concerned, i am fine with 1) because i think it is very 
<br>
unlikely an user ever wants to use link-local addresses.
<br>
<p>Thanks in advance for your feedback so we can move forward.
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17443.php">Ralph Castain: "Re: [OMPI devel] RFC: how should Open MPI handle link-local addresses"</a>
<li><strong>Previous message:</strong> <a href="17441.php">George Bosilca: "Re: [OMPI devel] Open MPI collectives algorithm selection"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17443.php">Ralph Castain: "Re: [OMPI devel] RFC: how should Open MPI handle link-local addresses"</a>
<li><strong>Reply:</strong> <a href="17443.php">Ralph Castain: "Re: [OMPI devel] RFC: how should Open MPI handle link-local addresses"</a>
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

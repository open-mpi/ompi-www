<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jul 24 16:11:59 2007" -->
<!-- isoreceived="20070724201159" -->
<!-- sent="Tue, 24 Jul 2007 14:11:48 -0600" -->
<!-- isosent="20070724201148" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] Hostfile - oh yes, again!" -->
<!-- id="C2CBB924.363C%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-24 16:11:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1990.php">Adrian Knoth: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Bug#433142: openmpi: FTBFS on GNU/kFreeBSD"</a>
<li><strong>Previous message:</strong> <a href="1988.php">Jeff Squyres: "Re: [OMPI devel] Fwd: [Open MPI] #1101: MPI_ALLOC_MEM with 0 size must be valid"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yo all
<br>
<p>More thoughts on hostfile usage - I'm sure you are all sitting on
<br>
pins-and-needles awaiting more discussion on this exciting topic!
<br>
<p>I'm continuing to try and work through the use-cases here so we can get this
<br>
fixed. It continues to be an issue for users on the list, as well as our own
<br>
developers. The problem is that we use &quot;hostfile&quot; and &quot;-host&quot; for dual
<br>
purposes, which means there is an opening for confusion over what should
<br>
happen.
<br>
<p>Let's consider two major use-cases.
<br>
<p>Use-case 1: hostfile and/or -host, no managed environment
<br>
I believe there is an expected and consistent behavior for the case where we
<br>
are not in a managed environment, but the user specifies a hostfile and/or
<br>
-host. In these cases, we use the hostfile (if provided) to completely
<br>
describe the available hosts, and any -host is used to specify which hosts
<br>
in that hostfile are to be used for the initial application.
<br>
<p>At issue, however, is what happens with comm_spawn - is the child job
<br>
restricted to the -host list, or is it free to use any of the hosts in the
<br>
hostfile? I have heard it both ways from users, so I believe we are free to
<br>
decide here. Does anyone have an opinion? Do we need an option to indicate
<br>
that all child jobs are restricted to the specified -host list?
<br>
<p><p><p>Use-case 2: managed environment, hostfile and/or -host provided
<br>
You will find a lengthy discourse in Ticket #1018 about how to deal with
<br>
this use-case - it is messy, with multiple definitions running around. I
<br>
believe we have hit upon a reasonable path forward in that discussion
<br>
regarding how to parse a node list from this use-case.
<br>
<p>However, it left open the question of who has access to the resulting node
<br>
list. As I tried to indicate in my prior note, the question revolves again
<br>
around comm_spawn: does the child job have access to all nodes in the
<br>
original allocation; those nodes in the original allocation that are also
<br>
listed in a hostfile; those nodes in the original allocation that are also
<br>
in the -host list; or...?
<br>
<p><p>Obviously, as someone primarily focused on the RTE, I couldn't possibly care
<br>
less which of these modes you select. However, I *do* need to know how you
<br>
want Open MPI to operate so I can build the system to meet those
<br>
requirements.
<br>
<p>I hope this - in combination with the prior note - will help you to
<br>
understand the question. Any direction would be appreciated as we are kinda
<br>
stuck until I know how you want the system to behave.
<br>
<p>Oh yeah - in case you were wondering, prior MPI's like LA-MPI and LAM-MPI
<br>
avoided these issues (e.g., by ignoring hostfiles in use case 2). So we are
<br>
kind of charting new territory here - I think our users will be fine either
<br>
way if we just tell them &quot;this is how it works&quot;.
<br>
<p>Thanks
<br>
Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1990.php">Adrian Knoth: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Bug#433142: openmpi: FTBFS on GNU/kFreeBSD"</a>
<li><strong>Previous message:</strong> <a href="1988.php">Jeff Squyres: "Re: [OMPI devel] Fwd: [Open MPI] #1101: MPI_ALLOC_MEM with 0 size must be valid"</a>
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

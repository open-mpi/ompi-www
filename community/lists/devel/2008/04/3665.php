<?
$subject_val = "Re: [OMPI devel] MPI_Comm_connect/Accept";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr  4 15:21:35 2008" -->
<!-- isoreceived="20080404192135" -->
<!-- sent="Fri, 04 Apr 2008 13:21:23 -0600" -->
<!-- isosent="20080404192123" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_Comm_connect/Accept" -->
<!-- id="C41BDBD3.CF4C%rhc_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C41BD5B8.CF47%rhc_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] MPI_Comm_connect/Accept<br>
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-04 15:21:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3666.php">Karol Mroz: "[OMPI devel] Build failure on FreeBSD 7"</a>
<li><strong>Previous message:</strong> <a href="3664.php">Ralph H Castain: "Re: [OMPI devel] MPI_Comm_connect/Accept"</a>
<li><strong>In reply to:</strong> <a href="3664.php">Ralph H Castain: "Re: [OMPI devel] MPI_Comm_connect/Accept"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3690.php">Aurélien Bouteiller: "Re: [OMPI devel] MPI_Comm_connect/Accept"</a>
<li><strong>Reply:</strong> <a href="3690.php">Aurélien Bouteiller: "Re: [OMPI devel] MPI_Comm_connect/Accept"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Okay, I have a partial fix in there now. You'll have to use -mca routed
<br>
unity as I still need to fix it for routed tree.
<br>
<p>Couple of things:
<br>
<p>1. I fixed the --debug flag so it automatically turns on the debug output
<br>
from the data server code itself. Now ompi-server will tell you when it is
<br>
accessed.
<br>
<p>2. remember, we added an MPI_Info key that specifies if you want the data
<br>
stored locally (on your own mpirun) or globally (on the ompi-server). If you
<br>
specify nothing, there is a precedence built into the code that defaults to
<br>
&quot;local&quot;. So you have to tell us that this data is to be published &quot;global&quot;
<br>
if you want to connect multiple mpiruns.
<br>
<p>I believe Jeff wrote all that up somewhere - could be in an email thread,
<br>
though. Been too long ago for me to remember... ;-) You can look it up in
<br>
the code though as a last resort - it is in
<br>
ompi/mca/pubsub/orte/pubsub_orte.c.
<br>
<p>Ralph
<br>
<p><p><p>On 4/4/08 12:55 PM, &quot;Ralph H Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Well, something got borked in here - will have to fix it, so this will
</span><br>
<span class="quotelev1">&gt; probably not get done until next week.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 4/4/08 12:26 PM, &quot;Ralph H Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Yeah, you didn't specify the file correctly...plus I found a bug in the code
</span><br>
<span class="quotelev2">&gt;&gt; when I looked (out-of-date a little in orterun).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I am updating orterun (commit soon) and will include a better help message
</span><br>
<span class="quotelev2">&gt;&gt; about the proper format of the orterun cmd-line option. The syntax is:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -ompi-server uri
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; or -ompi-server file:filename-where-uri-exists
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Problem here is that you gave it a uri of &quot;test&quot;, which means nothing. ;-)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Should have it up-and-going soon.
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 4/4/08 12:02 PM, &quot;Aur&#233;lien Bouteiller&quot; &lt;bouteill_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I've not been very successful at using ompi-server. I tried this :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; xterm1$ ompi-server --debug-devel -d --report-uri test
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [grosse-pomme.local:01097] proc_info: hnp_uri NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon uri NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [grosse-pomme.local:01097] [[34900,0],0] ompi-server: up and running!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; xterm2$ mpirun -ompi-server test -np 1 mpi_accept_test
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Port name:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2285895681.0;tcp://192.168.0.101:50065;tcp://192.168.0.150:50065:300
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; xterm3$ mpirun -ompi-server test  -np 1 simple_connect
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Process rank 0 attempted to lookup from a global ompi_server that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; could not be contacted. This is typically caused by either not
</span><br>
<span class="quotelev3">&gt;&gt;&gt; specifying the contact info for the server, or by the server not
</span><br>
<span class="quotelev3">&gt;&gt;&gt; currently executing. If you did specify the contact info for a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; server, please check to see that the server is running and start
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it again (or have your sys admin start it) if it isn't.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [grosse-pomme.local:01122] *** An error occurred in MPI_Lookup_name
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [grosse-pomme.local:01122] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [grosse-pomme.local:01122] *** MPI_ERR_NAME: invalid name argument
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [grosse-pomme.local:01122] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The server code Open_port, and then PublishName. Looks like the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; LookupName function cannot reach the ompi-server. The ompi-server in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; debug mode does not show any output when a new event occurs (like when
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the server is launched). Is there something wrong in the way I use it ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Aurelien
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Le 3 avr. 08 &#224; 17:21, Ralph Castain a &#233;crit :
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Take a gander at ompi/tools/ompi-server - I believe I put a man page
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; there. You might just try &quot;man ompi-server&quot; and see if it shows up.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Holler if you have a question - not sure I documented it very
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; thoroughly at
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the time.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On 4/3/08 3:10 PM, &quot;Aur&#233;lien Bouteiller&quot; &lt;bouteill_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Ralph,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I am using trunk. Is there a documentation for ompi-server ? Sounds
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; exactly like what I need to fix point 1.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Aurelien
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Le 3 avr. 08 &#224; 17:06, Ralph Castain a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I guess I'll have to ask the basic question: what version are you
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; using?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; If you are talking about the trunk, there no longer is a &quot;universe&quot;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; concept
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; anywhere in the code. Two mpiruns can connect/accept to each other
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; as long
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; as they can make contact. To facilitate that, we created an &quot;ompi-
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; server&quot;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; tool that is supposed to be run by the sys-admin (or a user, doesn't
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; matter
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; which) on the head node - there are various ways to tell mpirun
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; how to
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; contact the server, or it can self-discover it.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I have tested publish/lookup pretty thoroughly and it seems to
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; work. I
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; haven't spent much time testing connect/accept except via
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; comm_spawn, which
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; seems to be working. Since that uses the same mechanism, I would
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; have
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; expected connect/accept to work as well.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; If you are talking about 1.2.x, then the story is totally different.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On 4/3/08 2:29 PM, &quot;Aur&#233;lien Bouteiller&quot; &lt;bouteill_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi everyone,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I'm trying to figure out how complete is the implementation of
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Comm_connect/Accept. I found two problematic cases.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 1) Two different programs are started in two different mpirun. One
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; makes accept, the second one use connect. I would not expect
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; MPI_Publish_name/Lookup_name to work because they do not share the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; HNP. Still I would expect to be able to connect by copying (with
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; printf-scanf) the port_name string generated by Open_port;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; especially
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; considering that in Open MPI, the port_name is a string containing
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; tcp address and port of the rank 0 in the server communicator.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; However, doing so results in &quot;no route to host&quot; and the connecting
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; application aborts. Is the problem related to an explicit check of
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; universes on the accept HNP ? Do I expect too much from the MPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; standard ? Is it because my two applications does not share the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; same
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; universe ? Should we (re) add the ability to use the same universe
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; for
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; several mpirun ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 2) Second issue is when the program setup a port, and then accept
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; multiple clients on this port. Everything works fine for the first
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; client, and then accept stalls forever when waiting for the second
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; one. My understanding of the standard is that it should work: 5.4.2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; states &quot;it must call MPI_Open_port to establish a port [...] it
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; must
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; call MPI_Comm_accept to accept connections from clients&quot;. I
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; understand
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; that for one MPI_Open_port I should be able to manage several MPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; clients. Am I understanding correctly the standard here and
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; should we
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; fix this ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Here is a copy of the non-working code for reference.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; /*
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; * Copyright (c) 2004-2007 The Trustees of the University of
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Tennessee.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; *                         All rights reserved.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; * $COPYRIGHT$
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; *
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; * Additional copyrights may follow
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; *
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; * $HEADER$
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; int main(int argc, char *argv[])
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;    char port[MPI_MAX_PORT_NAME];
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;    int rank;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;    int np;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;    MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;    MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;    MPI_Comm_size(MPI_COMM_WORLD, &amp;np);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;    if(rank)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;    {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;        MPI_Comm comm;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;        /* client */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;        MPI_Recv(port, MPI_MAX_PORT_NAME, MPI_CHAR, 0, 0,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; MPI_COMM_WORLD, MPI_STATUS_IGNORE);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;        printf(&quot;Read port: %s\n&quot;, port);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;        MPI_Comm_connect(port, MPI_INFO_NULL, 0, MPI_COMM_SELF,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &amp;comm);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;        MPI_Send(&amp;rank, 1, MPI_INT, 0, 1, comm);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;        MPI_Comm_disconnect(&amp;comm);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;    }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;    else
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;    {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;        int nc = np - 1;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;        MPI_Comm *comm_nodes = (MPI_Comm *) calloc(nc,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; sizeof(MPI_Comm));
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;        MPI_Request *reqs = (MPI_Request *) calloc(nc,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; sizeof(MPI_Request));
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;        int *event = (int *) calloc(nc, sizeof(int));
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;        int i;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;        MPI_Open_port(MPI_INFO_NULL, port);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; /*        MPI_Publish_name(&quot;test_service_el&quot;, MPI_INFO_NULL,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; port);*/
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;        printf(&quot;Port name: %s\n&quot;, port);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;        for(i = 1; i &lt; np; i++)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;            MPI_Send(port, MPI_MAX_PORT_NAME, MPI_CHAR, i, 0,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; MPI_COMM_WORLD);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;        for(i = 0; i &lt; nc; i++)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;        {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;            MPI_Comm_accept(port, MPI_INFO_NULL, 0, MPI_COMM_SELF,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &amp;comm_nodes[i]);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;            printf(&quot;Accept %d\n&quot;, i);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;            MPI_Irecv(&amp;event[i], 1, MPI_INT, 0, 1, comm_nodes[i],
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &amp;reqs[i]);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;            printf(&quot;IRecv %d\n&quot;, i);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;        }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;        MPI_Close_port(port);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;        MPI_Waitall(nc, reqs, MPI_STATUSES_IGNORE);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;        for(i = 0; i &lt; nc; i++)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;        {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;            printf(&quot;event[%d] = %d\n&quot;, i, event[i]);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;            MPI_Comm_disconnect(&amp;comm_nodes[i]);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;            printf(&quot;Disconnect %d\n&quot;, i);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;        }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;    }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;    MPI_Finalize();
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;    return EXIT_SUCCESS;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; * Dr. Aur&#233;lien Bouteiller
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; * Sr. Research Associate at Innovative Computing Laboratory
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; * University of Tennessee
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; * 1122 Volunteer Boulevard, suite 350
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; * Knoxville, TN 37996
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; * 865 974 6321
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3666.php">Karol Mroz: "[OMPI devel] Build failure on FreeBSD 7"</a>
<li><strong>Previous message:</strong> <a href="3664.php">Ralph H Castain: "Re: [OMPI devel] MPI_Comm_connect/Accept"</a>
<li><strong>In reply to:</strong> <a href="3664.php">Ralph H Castain: "Re: [OMPI devel] MPI_Comm_connect/Accept"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3690.php">Aurélien Bouteiller: "Re: [OMPI devel] MPI_Comm_connect/Accept"</a>
<li><strong>Reply:</strong> <a href="3690.php">Aurélien Bouteiller: "Re: [OMPI devel] MPI_Comm_connect/Accept"</a>
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

<?php
global $shell_font;
global $shell;
global $cmd_font;

$q[] = "How do I specify to use the IP network for MPI messages?";

$anchor[] = "tcp-btl";

$a[] = "In general, you specify that the [tcp] BTL component should be
used.  This will direct Open MPI to use TCP-based communications over
IP interfaces / networks.

However, note that you should _also_ specify that the [self]
BTL component should be used.  [self] is for loopback communication
(i.e., when an MPI process sends to itself), and is technically a
different communication channel than TCP.  For example:

<geshi bash>
shell$ mpirun --mca btl tcp,self ...
</geshi>

Failure to specify the [self] BTL may result in Open MPI being unable
to complete send-to-self scenarios (meaning that your program will run
fine until a process tries to send to itself).

Note that if the [tcp] BTL is available at run time (which it should
be on most POSIX-like systems), Open MPI should automatically use it
by default (ditto for [self]).  Hence, it's _usually_ unnecessary to
specify these options on the [mpirun] command line.  They are
typically only used when you want to be absolutely positively
definitely sure to use the specific BTL.

If you are using a high-speed network (such as Myrinet or InfiniBand),
<a href=\"#tcp-auto-disable\">be sure to also see this FAQ entry.</a>";

/////////////////////////////////////////////////////////////////////////

$q[] = "But wait &mdash; I'm using a high-speed network.  Do I have to
disable the TCP BTL?";

$anchor[] = "tcp-auto-disable";

$a[] = "No.  Following the so-called \"Law of Least Astonishment\",
Open MPI assumes that if you have both a IP network and at least one
high-speed network (such InfiniBand), you will likely
only want to use the high-speed network(s) for MPI message passing.
Hence, the [tcp] BTL component will sense this and automatically
deactivate itself.

That being said, Open MPI may still use TCP for setup and teardown
information &mdash; so you'll see traffic across your IP network during
startup and shutdwon of your MPI job.  This is normal and does not
affect the MPI message passing channels.";

/////////////////////////////////////////////////////////////////////////

$q[] = "How do I know what MCA parameters are available for tuning MPI performance?";

$anchor[] = "tcp-params";

$a[] = "The [ompi_info] command can display all the parameters
available for the [tcp] BTL component (i.e., the component that uses
TCP for MPI communications):

<geshi bash>
shell$ ompi_info --param btl tcp --level 9
</geshi>

<font color=\"red\"><strong>NOTE:</strong></font> Prior to the Open
MPI 1.7 series, [ompi_info] would show all MCA parameters by default.
Starting with Open MPI v1.7, you need to specify [--level 9] (or
[--all]) to show _all_ MCA parameters";

/////////////////////////////////////////////////////////////////////////

$q[] = "Does Open MPI use the IP loopback interface?";

$anchor[] = "tcp-loopback";

$a[] = "Usually not.

In general message passing usage, there are two scenarios where using
the IP loopback interface could be used:

<ol>
<li>Sending a message from one process to itself</li>
<li>Sending a message from one process to another process on the same
machine</li>
</ol>

The TCP BTL does not handle \"send-to-self\" scenarios in Open MPI;
indeed, it is not even capable of doing so.  Instead, the [self] BTL
component is used for all send-to-self MPI communications.  Not only
does this allow all Open MPI BTL components to avoid special case code
for send-to-self scenarios, it also allows avoiding using inefficient
loopback network stacks (such as the IP loopback device).

Specifically: the [self] component uses its own mechanisms for
send-to-self scenarios; it does not use network interfaces.

When sending to other processes on the same machine, Open MPI will
default to using a shared memory BTL (<tt>sm</tt> or <tt>vader</tt>).
If the user has deactivated these BTLs, depending on what other BTL
components are available, it is possible that the TCP BTL will be
chosen for message passing to processes on the same node, in which
case the IP lookback device will likely be used.  But this is not the
default; either shared memory has to fail to startup properly or the
user must specifically request not to use the shared memory BTL.";

/////////////////////////////////////////////////////////////////////////

$q[] = "I have multiple IP networks on some/all of my cluster nodes.  Which ones will Open MPI use?";

$anchor[] = "tcp-multi-network";

$a[] = "In general, Open MPI will greedily use all IP networks that
it finds per its <a href=\"#tcp-routability\">reachability
computations</a>.

To change this behavior, you can either specifically include certain
networks or specifically exclude certain networks.  See <a
href=\"#tcp-selection\">this FAQ entry</a> for more details.
";

/////////////////////////////////////////////////////////////////////////

$q[] = "I'm getting TCP-related errors.  What do they mean?";

$anchor[] = "tcp-connection-errors";

$a[] = "TCP-related errors are usually reported by Open MPI in a
message similar to these:

<geshi text>
btl_tcp_endpoint.c:572:mca_btl_tcp_endpoint_complete_connect] connect() failed with errno=113
mca_btl_tcp_frag_send: writev failed with errno=104
</geshi>

If an error number is displayed with no explanation string, you can
see what that specific error number means on your operating system
with the following command (the following example was run on Linux;
results may be different on other operating systems):

<geshi bash>
shell$ perl -e 'die\$!=113'
No route to host at -e line 1.
shell$ perl -e 'die\$!=104'
Connection reset by peer at -e line 1.
</geshi>

Two types of errors are commonly reported to the Open MPI user's
mailing list:

<ul>

<li> *No route to host:* These types of errors _usually_ mean that
there are multiple IP interfaces available and they do not obey Open
MPI's assumptions about routability.  See these two FAQ items for more
information:

<ul>
<li> <a href=\"#tcp-routabiliy\">Open MPI's routability assumptions</a></li>
<li> <a href=\"#tcp-selection\">How to force specific IP interfaces</a></li>
</ul></li>

<li> *Connection reset by peer:* These types of errors _usually_ occur
after MPI_INIT has completed, and typically indicate that an MPI
process has died unexpectedly (e.g., due to a seg fault).  The
specific error message indicates that a peer MPI process tried to
write to the now-dead MPI process and failed.</li>

</ul>";

/////////////////////////////////////////////////////////////////////////

$ss = "$shell_font$shell";

$q[] = "How do I tell Open MPI which IP interfaces / networks to use?";

$anchor[] = "tcp-selection";

$a[] = "In some parallel environments, it is not uncommon to have
multiple IP interfaces on each node &mdash; for example, one IP network
may be \"slow\" and used for control information such as a batch
scheduler, a networked filesystem, and/or interactive logins.  Another
IP network (or networks) may be \"fast\" and be intended for parallel
applications to use during their runs.  As another example, some
operating systems may also have virtual interfaces for communicating
with virtual machines.

Unless otherwise specified, Open MPI will greedily use all \"up\" IP
networks that it can find and try to connect to all peers _upon
demand_ (i.e., Open MPI does not open sockets to all of its MPI peers
during [MPI_INIT] &mdash; see <A HREF=\"#tcp-sockets\">this FAQ entry</A>
for more details).  Hence, if you want MPI jobs to not use specific
IP networks &mdash; or not use any IP networks at all &mdash; then you need to
tell Open MPI.

*NOTE:* Aggressively using all \"up\" interfaces can cause problems in
some cases.  For example, if you have a machine with a local-only
interface (e.g., the loopback device, or a virtual-machine bridge
device that can only be used _on that machine_, and cannot be used to
communicate with MPI processes on other machines), you will likely
need to tell Open MPI to ignore these networks.  Open MPI usually
ignores loopback devices by default, but *other local-only devices
must be manually ignored.* Users have reported cases where RHEL6
automatically installed a \"virbr0\" device for Xen virtualization.
This interface was automatically given an IP address in the
192.168.1.0/24 subnet and marked as \"up\".  Since Open MPI saw this
192.168.1.0/24 \"up\" interface in all MPI processes on all nodes, it
assumed that that network was usable for MPI communications.  This is
obviously incorrect, and it led to MPI applications hanging when they
tried to send or receive MPI messages.

<ol>
<li>To disable Open MPI from using TCP for MPI communications, the
[tcp] MCA parameter should be set accordingly.  You can either
_exclude_ the TCP component or _include_ all other components.
Specifically:

<geshi bash>
# This says to exclude the TCP BTL component
# (implicitly including all others)
shell$ mpirun --mca btl ^tcp...

# This says to include only the listed BTL components
# (tcp is not listed, and therefore will not be used)
shell$ mpirun --mca btl self,vader,openib ...
</geshi>

<li>If you want to use TCP for MPI communications, but want to
restrict it from certain networks, use the [btl_tcp_if_include] or
[btl_tcp_if_exclude] MCA parameters (only one of the two should be
set).  The values of these parameters can be a comma-delimited list of
network interfaces.  For example:

<geshi bash>
# This says to not use the eth0 and lo interfaces.
# (and implicitly use all the rest)  Per the description
# above, IP loopback and all local-only devices *must*
# be included if the exclude list is specified.
shell$ mpirun --mca btl_tcp_if_exclude lo,eth0 ...

# This says to only use the eth1 and eth2 interfaces
# (and implicitly ignore the rest)
shell$ mpirun --mca btl_tcp_if_include eth1,eth2 ...
</geshi>
</li>

<li>Starting in the Open MPI v1.5 series, you can specify subnets in the
include or exclude lists in CIDR notation.  For example:

<geshi bash>
# Only use the 192.168.1.0/24 and 10.10.0.0/16 subnets for MPI
# communications:
shell$ mpirun --mca btl_tcp_if_include 192.168.1.0/24,10.10.0.0/16 ...
</geshi>

<font color=red><strong>NOTE:</strong></font> You must specify the
CIDR notation for a given network precisely.  For example, if you have
two IP networks 10.10.0.0/24 and 10.10.1.0/24, Open MPI will not
recognize either of them if you specify \"10.10.0.0/16\".

<font color=red><strong>NOTE:</strong></font> If you use the
[btl_tcp_if_include] and [btl_tcp_if_exclude] MCA parametes to shape
the behavior of the TCP BTL for MPI communications, you may also
need/want to investigate the corresponding MCA parameters
[oob_tcp_if_include] and [oob_tcp_if_exclude], which are used to shape
non-MPI TCP-based communication (e.g., communications setup and
coordination during MPI_INIT and MPI_FINALIZE).

</ol>

Note that Open MPI will still use TCP for control messages, such as
data between [mpirun] and the MPI processes, rendezvous information
during [MPI_INIT], etc.  To disable TCP altogether, you also need to
disable the [tcp] component from the OOB framework.";

/////////////////////////////////////////////////////////////////////////

$q[] = "Does Open MPI open a bunch of sockets during MPI_INIT?";

$anchor[] = "tcp-sockets";

$a[] = "Although Open MPI is likely to open multiple TCP sockets
during [MPI_INIT], the tcp BTL component *does not open one socket per
MPI peer process during <code>MPI_INIT</code>.*  Open MPI opens
sockets as they are required &mdash; so the first time a process sends a
message to a peer and there is a TCP connection between the two, Open
MPI will automatically open a new socket.

Hence, you should not have scalability issues with running large
numbers of processes (e.g., running out of per-process file
descriptors) if your parallel application is sparse in its
communication with peers.";

/////////////////////////////////////////////////////////////////////////

function goog($term) {
    return "<a href=\"https://www.google.com/search?q=$term\">$term</a>";
}

$q[] = "Are there any Linux kernel TCP parameters that I should set?";

$anchor[] = "tcp-linux-kernel-params";

$a[] = "Everyone has different opinions on this, and it also depends
on your exact hardware and environment.  Below are general guidelines
that some users have found helpful.

<ol>
<li> *" . goog("net.ipv4.tcp_syn_retries") . ":* Some Linux systems
have very large initial connection timeouts &mdash; they retry sending SYN
packets many times before determining that a connection cannot be
made.  If MPI is going to fail to make socket connections, it would be
better for them to fail in somewhat quickly (minutes vs. hours).  You
might want to reduce this value to smaller value; YMMV.</li>

<li> *" . goog("net.ipv4.tcp_keepalive_time") . ":* Some MPI
applications send an initial burst of MPI messages (over TCP) and then
send nothing for long periods of time (e.g., embarrissingly parallel
applications).  Linux may decide that these dormant TCP sockets are
dead because it has seen no traffic on them for long periods of time.
You might therefore need to lengthen the TCP inactivity timeout.  Many
Linux systems default to 7,200 seconds; increase it if necessary.</li>

<li> Increase TCP buffering for 10G or 40G.  Many Linux distributions
come with good buffering presets for 1G Ethernet.  In a datacenter/HPC
cluster with 10G or 40G Ethernet NICs, this amount of kernel buffering
is typically insufficient.  Here's a set of parameters that some have
used for good 10G/40G TCP bandwidth:
<ul>
<li> *" . goog("net.core.rmem_max") . ":* 16777216</li>
<li> *" . goog("net.core.wmem_max") . ":* 16777216</li>
<li> *" . goog("net.ipv4.tcp_rmem") . ":* 4096 87380 16777216</li>
<li> *" . goog("net.ipv4.tcp_wmem") . ":* 4096 65536 16777216</li>
<li> *" . goog("net.core.netdev_max_backlog") . ":* 30000</li>
<li> *" . goog("net.core.rmem_default") . ":* 16777216</li>
<li> *" . goog("net.core.wmem_default") . ":* 16777216</li>
<li> *" . goog("net.ipv4.tcp_mem") . ":* '16777216 16777216 16777216'</li>
<li> *" . goog("net.ipv4.route.flush") . ":* 1</li>
</ul>
</li>
</ol>

Each of the above items is a Linux kernel parameter that can be set in
multiple different ways.

<ol>
<li> You can change the running kernel via the [/proc] filesystem:

<geshi bash>
shell# cat /proc/sys/net/ipv4/tcp_syn_retries
5
shell# echo 6 > /proc/sys/net/ipv4/tcp_syn_retries
</geshi>
</li>
<li> You can also use the [sysctl] command:

<geshi bash>
shell# sysctl net.ipv4.tcp_syn_retries
net.ipv4.tcp_syn_retries = 5
shell# sysctl -w net.ipv4.tcp_syn_retries=6
net.ipv4.tcp_syn_retries = 6
</geshi>
</li>
<li> Or you can set them by adding entries in [/etc/sysctl.conf],
which are persistent across reboots:

<geshi bash>
shell$ grep tcp_syn_retries /etc/sysctl.conf
net.ipv4.tcp_syn_retries = 6
</geshi>
</li>
<li> Your Linux distro may also support you putting individual files
in [/etc/sysctl.d] (even if that directory does not yet exist), which
is actually better practice than putting them in [/etc/sysctl.conf].
For example:

<geshi bash>
shell$ cat /etc/sysctl.d/my-tcp-settings
net.ipv4.tcp_syn_retries = 6
</geshi>
</ol>";

/////////////////////////////////////////////////////////////////////////

$q[] = "How does Open MPI know which IP addresses are routable to each other in Open MPI 1.2?";

$anchor[] = "tcp-routability";

$a[] = "This is a fairly complicated question &mdash; there can be
ambiguity when hosts have multiple NICs and/or there are multiple
IP networks that are not routable to each other in a single MPI job.

It is important to note that Open MPI's atomic unit of routing is a
_process_ &mdash; not an IP address.  Hence, Open MPI makes connections
between _processes_, not nodes (these processes are almost always on
remote nodes, but it's still better to think in terms of _processes_,
not _nodes_).

Specifically, since Open MPI jobs can span multiple IP networks, each
MPI process may be able to use multiple IP addresses to communicate
with each other MPI process (and vice versa).  So for each process,
Open MPI needs to determine which IP address &mdash; if any &mdash; to use to
connect to a peer MPI process.

For example, say that you have a cluster with 16 nodes on a private
ethernet network.  One of these nodes doubles as the head node for the
cluster and therefore has 2 ethernet NICs &mdash; one to the external
network and one to the internal cluster network.  But since 16 is a
nice number, you also want to use it for computation as well.  So when
you mpirun spanning all 16 nodes, OMPI has to figure out to _not_ use
the external NIC on the head node and only use the internal NIC.

To explain what happens, we need to explain some of what happens in
MPI_INIT.  Even though Open MPI only makes TCP connections between
peer MPI processes upon demand (see <a href=\"#tcp-sockets\">this FAQ
entry</a>), each process publishes its TCP contact information which
is then made available to all processes.  Hence, every process knows
the IP address(es) and corresponding port number(s) to contact every
other process.

But keep in mind that these addresses may span multiple IP networks
and/or not be routable to each other.  So when a connection is
requested, the TCP BTL component in Open MPI creates pairwise
combinations of all the IP addresses of the localhost to all the IP
addresses of the peer process, looking for a match.

A \"match\" is defined by the following rules:

<ol>
<li> If the two IP addresses match after the subnet mask is applied,
     assume that they are mutually routable and allow the connection</li>
<li> If the two IP addresses are public, assume that they are mutually
     routable and allow the connection</li>
<li> Otherwise, the connection is disallowed (this is not an error &mdash;
     we just disallow this connection on the hope that some other
     device can be used to make a connection)</li>
</ol>

These rules tend to cover the following scenarios:

<ul>
<li>A cluster on a private network with a head node that has a NIC on
the private network and the public network</li>
<li> Clusters that have all public addresses</li>
</ul>

These rules do _not_ cover the following cases:

<ul>
<li>Running an MPI job that spans public and private networks</li>
<li>Running an MPI job that spans a bunch of private networks with
narrowly-scoped netmasks, such as nodes that have IP addresses
192.168.1.10 and 192.168.2.10 with netmasks of 255.255.255.0 (i.e.,
the network fabric makes these two nodes be routable to each other,
even though the netmask implies that they are on different
subnets).</li>
</ul>";

/////////////////////////////////////////////////////////////////////////

$q[] = "How does Open MPI know which IP addresses are routable to each other in Open MPI 1.3 (and beyond)?";

$anchor[] = "tcp-routability-1.3";

$a[] = "Starting with the Open MPI v1.3 series, assumptions about
routability are much different than prior series.

With v1.3 and later, Open MPI assumes that all interfaces are routable
as long as they have the same address family, IPv4 or IPv6.  We use
graph theory and give each possible connection a weight depending on
the quality of the connection.  This allows the library to select the
best connections between nodes.  This method also supports striping
but prevents more than one connection to any interface.

The quality of the connection is defined as follows, with a higher
number meaning better connection.  Note that when giving a weight to a
connection consisting of a private address and a public address, it will
give it the weight of [PRIVATE_DIFFERENT_NETWORK].

<geshi text>
            NO_CONNECTION = 0
PRIVATE_DIFFERENT_NETWORK = 1
PRIVATE_SAME_NETWORK      = 2
PUBLIC_DIFFERENT_NETWORK  = 3
PUBLIC_SAME_NETWORK       = 4
</geshi>

At this point, an example will best illustrate how two processes on two
different nodes would connect up.  Here we have two nodes with a variety
of interfaces.

<geshi text>
        NodeA                NodeB
   ---------------       ---------------
  |     lo0       |     |     lo0       |
  |  127.0.0.1    |     |  127.0.0.1    |
  |  255.0.0.0    |     |  255.0.0.0    |
  |               |     |               |
  |     eth0      |     |    eth0       |
  |   10.8.47.1   |     |   10.8.47.2   |
  | 255.255.255.0 |     | 255.255.255.0 |
  |               |     |               |
  |     ibd0      |     |     ibd0      |
  |  192.168.1.1  |     |  192.168.1.2  |
  | 255.255.255.0 |     | 255.255.255.0 |
  |               |     |               |
  |     ibd1      |     |               |
  |  192.168.2.2  |     |               |
  | 255.255.255.0 |     |               |
   ---------------       ---------------
</geshi>

From these two nodes, the software builds up a bipartite graph that
shows all the possible connections with all the possible weights.  The
_lo0_ interfaces are excluded as the [btl_tcp_if_exclude] mca parameter
is set to _lo_ by default.  Here is what all the possible connections
with their weights look like.

<geshi text>
     NodeA         NodeB
eth0 --------- 2 -------- eth0
    \
     \
      \------- 1 -------- ibd0

ibd0 --------- 1 -------- eth0
    \
     \
      \------- 2 -------- ibd0

ibd1 --------- 1 -------- eth0
    \
     \
      \------- 1 -------- ibd0
</geshi>

The library then examines all the connections and picks the optimal
ones.  This leaves us with two connections being established between
the two nodes.

If you are curious about the actual [connect()] calls being made by
the processes, then you can run with [--mca btl_base_verbose 30].
This can be useful if you notice your job hanging and believe it may
be the library trying to make connections to unreachable hosts.

<geshi bash>
# Here is an example with some of the output deleted for clarity.
# One can see the connections that are attempted.
shell$ mpirun --mca btl self,sm,tcp --mca btl_base_verbose 30 -np 2 -host NodeA,NodeB a.out
[...snip...]
[NodeA:18003] btl: tcp: attempting to connect() to address 10.8.47.2 on port 59822
[NodeA:18003] btl: tcp: attempting to connect() to address 192.168.1.2 on port 59822
[NodeB:16842] btl: tcp: attempting to connect() to address 192.168.1.1 on port 44500
[...snip...]
</geshi>

In case you want more details about the theory behind the connection
code, you can find the background story in a brief
" . "<a href=\"http://www.ieeexplore.ieee.org/xpl/freeabs_all.jsp?isnumber=4476518&arnumber=4476565&count=56&index=46\">" . "IEEE paper.</A>";

/////////////////////////////////////////////////////////////////////////

$q[] = "Does Open MPI ever close TCP sockets?";

$anchor[] = "tcp-socket-closing";

$a[] = "In general, no.

Although TCP sockets are opened \"lazily\" (meaning that MPI
connections / TCP sockets are only opened upon demand &mdash; as opposed to
opening all possible sockets between MPI peer processes during
MPI_INIT), they are never closed.";

/////////////////////////////////////////////////////////////////////////

$q[] = "Does Open MPI support IP interfaces that have more than one IP address?";

$anchor[] = "ip-multiaddress-devices";

$a[] = "In general, no.

For example, if the output from your [ifconfig] has a single IP device
with multiple IP addresses like this:

<geshi text>
0: eth0: <BROADCAST,MULTICAST,UP,LOWER_UP> mtu 1500 qdisc mq state UP qlen 1000
   link/ether 00:18:ae:f4:d2:29 brd ff:ff:ff:ff:ff:ff
   inet 192.168.0.3/24 brd 192.168.0.255 scope global eth0:1
   inet 10.10.0.3/24 brf 10.10.0.255 scope global eth0
   inet6 fe80::218:aef2:29b4:2c4/64 scope link
      valid_lft forever preferred_lft forever
</geshi>

(note the two \"inet\" lines in there)

Then Open MPI will be unable to use this device.";

/////////////////////////////////////////////////////////////////////////

$q[] = "Does Open MPI support virtual IP interfaces?";

$anchor[] = "ip-virtual-ip-interfaces";

$a[] = "No.

For exampe, if the output of your [ifconfig] has both \"eth0\" and
\"eth0:0\", Open MPI will get confused if you use the TCP BTL, and
may hang or otherwise act unpredictably.

Note that using [btl_tcp_if_include] or [btl_tcp_if_exclude] to avoid
using the virtual interface will *not* solve the issue.

This may get fixed in a future release.  See <a
href=\"https://github.com/open-mpi/ompi/issues/160">GitHub issue
#160</a> to follow the progress on this issue.";

/////////////////////////////////////////////////////////////////////////

$q[] = "Why do I only see 5 Gbps bandwidth benchmark results on 10 GbE or faster networks?";

$anchor[] = "fast-tcp-network";

$a[] = " Before the 3.0 release series, Open MPI set two TCP tuning
parameters which, while a little large for 1 Gbps networks in 2005,
were woefully undersized for modern 10 Gbps networks.  Further, the
Linux kernel TCP stack has progressed to a dynamic buffer scheme,
allowing even larger buffers (and therefore window sizes).  The Open
MPI parameters meant that for most any multi-switch 10 GbE
configuration, the TCP window could not cover the bandwidth-delay
product of the network and, therefore, a single TCP flow could not
saturate the network link.

Open MPI 3.0 and later removed the problematic tuning parameters and
let the kernel do its (much more intelligent) thing.  If you still see
unexpected bandwidth numbers in your network, this may be a bug.
Please file a <a
href=\"https://github.com/open-mpi/ompi/issues\">GitHub Issue</a>.
The tuning parameter patch was backported to the 2.0 series in 2.0.3
and the 2.1 series in 2.1.2, so those versions and later should also
not require workarounds.  For earlier versions, the parameters can be
modified with an MCA parameter:

<geshi bash>
shell$ mpirun --mca btl_tcp_sndbuf 0 --mca btl_tcp_rcvbuf 0 ...
</geshi>";


/////////////////////////////////////////////////////////////////////////

$q[] = "Can I use multiple TCP connections to improve network performance?";

$anchor[] = "tcp-multi-links";

$a[] = "Open MPI 4.0.0 and later can use multiple TCP connections
between any pair of MPI processes, striping large messages across the
connections.  The \"btl_tcp_links\" parameter can be used to set how
many TCP connections should be established between MPI ranks.  Note
that this may not improve application performance for common use cases
of nearest-neighbor exchanges when there many MPI ranks on each host.
In these cases, there are already many TCP connections between any two
hosts (because of the many ranks all communicating), so the extra TCP
connections are likely just consuming extra resources and adding work
to the MPI implementation.  However, for highly multi-threaded
applications, where there are only one or two MPI ranks per host, the
\"btl_tcp_links\" option may improve TCP throughput considerably.";


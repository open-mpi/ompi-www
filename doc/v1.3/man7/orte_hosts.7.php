<?php
$topdir = "../../..";
$title = "orte_hosts(7) man page (version 1.3.4)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       OpenRTE  Hostfile and HOST Behavior - Overview of OpenRTE's support for
       user-supplied hostfiles and comma-delimited lists of hosts

</PRE>
<H2>DESCRIPTION</H2><PRE>
       OpenRTE supports several levels of user-specified host lists  based  on
       an  established  precedence order. Users can specify a <I>default</I> <I>hostfile</I>
       that contains a list of nodes available to all  app_contexts  given  on
       the  command  line.  Only  <I>one</I> default hostfile can be provided for any
       job. In addition, users can specify a <I>hostfile</I> that contains a list  of
       nodes  to  be  used for a specific app_context, or can provide a comma-
       delimited list of nodes to be used for that app_context via  the  <I>-host</I>
       command line option.

       The  precedence  order applied to these various options depends to some
       extent on the local environment. The following  table  illustrates  how
       host  and  hostfile directives work together to define the set of hosts
       upon which a job will execute in the  absence  of  a  resource  manager
       (RM):

        default
        hostfile      host        hostfile       Result
       ----------    ------      ----------      -----------------------------------------
        unset        unset          unset        Job is co-located with mpirun
        unset         set           unset        Host defines resource list for the job
        unset        unset           set         Hostfile defines resource list for the job
        unset         set            set         Hostfile defines resource list for the job,
                                                 then host filters the list to define the final
                                                 set of nodes available to each application
                                                 within the job
         set         unset          unset        Default hostfile defines resource list for the job
         set          set           unset        Default hostfile defines resource list for the job,
                                                 then host filters the list to define the final
                                                 set of nodes available to each application
                                                 within the job
         set          set            set         Default hostfile defines resource list for the job,
                                                 then hostfile filters the list, and then host filters
                                                 the list to define the final set of nodes available
                                                 to each application within the job

       This  changes somewhat in the presence of a RM as that entity specifies
       the initial allocation of nodes. In this case,  the  default  hostfile,
       hostfile and host directives are all used to filter the RM's specifica-
       tion so that a user can utilize different portions  of  the  allocation
       for different jobs. This is done according to the same precedence order
       as in the prior table, with the RM providing the initial pool of nodes.

</PRE>
<H2>RELATIVE INDEXING</H2><PRE>
       Once  an  initial  allocation  has  been  specified  (whether by an RM,
       default hostfile, or hostfile), subsequent hostfile and -host  specifi-
       cations  can  be  made  using  relative indexing. This allows a user to
       stipulate which hosts are to be used for a  given  app_context  without
       specifying  the  particular host name, but rather its relative position
       in the allocation.

       This can probably best be understood through  consideration  of  a  few
       examples. Consider the case where an RM has allocated a set of nodes to
       to specify the desired layout. In this case, a command line of:

       mpirun -pernode -host +n1,+n2 ./app1 : -host +n3,+n4 ./app2

       would provide the desired pattern. The "+" syntax  indicates  that  the
       information is being provided as a relative index to the existing allo-
       cation. Two methods of relative indexing are supported:

       <B>+n&lt;#&gt;</B>  A relative index into the allocation referencing the  &lt;#&gt;  node.
              OpenRTE will substitute the &lt;#&gt; node in the allocation

       <B>+e[:&lt;#&gt;]</B>
              A  request  for &lt;#&gt; empty nodes - i.e., OpenRTE is to substitute
              this reference with &lt;#&gt; nodes that have not yet been used by any
              other  app_context.  If the ":&lt;#&gt;" is not provided, OpenRTE will
              substitute the reference with all empty nodes. Note that OpenRTE
              does  track the empty nodes that have been assigned in this man-
              ner, so multiple uses of this option will result  in  assignment
              of  unique  nodes  up to the limit of the available empty nodes.
              Requests for more empty nodes than are available  will  generate
              an error.

       Relative  indexing can be combined with absolute naming of hosts in any
       arbitrary manner, and can be used in hostfiles  as  well  as  with  the
       -host command line option. In addition, any slot specification provided
       in hostfiles will be respected - thus, a user can specify that  only  a
       certain number of slots from a relative indexed host are to be used for
       a given app_context.

       Another example may help illustrate this point. Consider the case where
       a user has a default hostfile containing:

       dummy1 slots=4
       dummy2 slots=4
       dummy3 slots=4
       dummy4 slots=4
       dummy5 slots=4

       This  may, for example, be a hostfile that describes a set of commonly-
       used resources that the user wishes to  execute  applications  against.
       For  this  particular  application,  the  user plans to map byslot, and
       wants the first two ranks to be on the second node of  any  allocation,
       the  next ranks to land on an empty node, have one rank specifically on
       dummy4, the next rank to be on the second node of the allocation again,
       and finally any remaining ranks to be on whatever empty nodes are left.
       To accomplish this, the user provides a hostfile of:

       +n2 slots=2
       +e:1
       dummy4 slots=1
       +n2
       +e

       rank0 being mapped to dummy3
       rank1 to dummy1 as the first empty node
       rank2 to dummy4
       rank3 to dummy3
       rank4 to dummy2 and rank5 to dummy5 as the last remaining unused nodes

       Note  that  the sequential mapper ignores the number of slots arguments
       as it only maps one rank at a time to each node in the list.

       If the default round-robin mapper had been used, then the mapping would
       have resulted in:

       ranks 0 and 1 being mapped to dummy3 since two slots were specified
       ranks 2-5 on dummy1 as the first empty node, which has four slots
       rank6 on dummy4 since the hostfile specifies only a single slot from that node is to be used
       ranks 7 and 8 on dummy3 since only two slots remain available
       ranks 9-12 on dummy2 since it is the next available empty node and has four slots
       ranks 13-16 on dummy5 since it is the last remaining unused node and has four slots

       Thus, the use of relative indexing can allow for complex mappings to be
       ported across allocations,  including  those  obtained  from  automated
       resource  managers, without the need for manual manipulation of scripts
       and/or command lines.

</PRE>
<H2>SEE ALSO</H2><PRE>
         <B>orterun(1)</B>

1.3.4                            Nov 11, 2009                    <B>ORTE_HOSTS(7)</B>
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");

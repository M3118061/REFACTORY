enum TicketStatus {
  Closed,
  Open,
  InProgress,
  Resolved,
}

console.log(TicketStatus.Closed)     // 0
console.log(TicketStatus.Open)       // 1
console.log(TicketStatus.InProgress) // 2
console.log(TicketStatus.Resolved)   // 3

interface TicketSupport {
  title: string,
  status: TicketStatus
}

const ticket: TicketSupport = {
  title: 'Something',
  status: TicketStatus.Open
}

console.log(ticket)